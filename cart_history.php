<?php
    include './core/process.php';
    if(checkLogin()){
        if(checkAdmin()) {
          header('Location: admin/home');
        }
        else {
          
          $userId = $_SESSION['user']['userId'];
        }
    }
    
    else{
        header('Location: login');
    }
    $cartList = getCart($userId);

    include "include/header.php";   
?>
<link rel="stylesheet" href="./assets/css/common.css">
<div class="container padding-top">
    <h2 class="title">Order history</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Time</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                while($row = $cartList->fetch_array(MYSQLI_BOTH)){
                    $id = $row['cartId'];
                    $time = $row['time'];
                    $price = $row['totalPrice'];
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$time</td>";
                    echo "<td>$price</td>";
                    echo "<td><a href='cart-detail?id=$id'>Detail</a></td>";
                    echo "</tr>";
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<?php include 'include/footer.php'; ?>
