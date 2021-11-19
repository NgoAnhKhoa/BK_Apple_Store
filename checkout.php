<?php
    include './core/auth.php';
    $success = true;
    $cart = $_SESSION['cart'];
    if($cart == []) {
        header('Location: home');
    }else {
        if(!checkLogin()){
            header('Location: login');
        }
        $userId = $_SESSION['user']['userId'];

        if(checkState($userId)){
            $totalPrice = 0;
            $cartId = "$userId".time();
            $conn = newConnection();
            foreach($cart as $id => $quantity) {
                $query = "SELECT `price` FROM `Products` WHERE `productId`=$id";
                $result = $conn->query($query);
                $row = $result->fetch_array(MYSQLI_BOTH);
                $totalPrice += $row['price']*intval($quantity);
            }
            $ship = round($totalPrice*0.05, 2);
            $totalPrice = round($totalPrice + $ship, 2);
            $query = "INSERT INTO `Cart` (`cartId`, `userId`, `totalPrice`) VALUES ('$cartId', $userId, $totalPrice)";
            $result = $conn->query($query);
            if(!$result) $success = false;
            foreach ($cart as $id => $quantity) {
                $query = "INSERT INTO `ItemCart` (`productId`,`cartId`,`quantity`) VALUES ($id, '$cartId', $quantity)";
                $result = $conn->query($query);
                if(!$result) $success = false;
            }
            $conn->close();
            
        
            if($success) {
                $_SESSION['cart'] = [];
            }
        }
        else {
            header('Location: login');
        }
    }
    include 'include/header.php';
?>

<div class="container">

    <?php if($success) { ?>
        <h3>Thanh toán thành công!</h3>
    <?php } else { ?>
        <h3>Thanh toán thất bại!</h3>
    <?php } ?>

</div>



<?php include 'include/footer.php'; ?>



