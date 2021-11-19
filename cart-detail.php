<?php
    include './core/process.php';

    if(checkLogin()){
        if(checkAdmin()) {
          header('Location: admin/home');
        }
        else {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
        
            }
            else {
                header('Location: cart-history');
            }
            include "include/header.php";
        }
             
    }
    else{
        header('Location: login');
    }

    
    $item_list = getCartItem($id);
?>

<div class="container">
    <h2 class="title">Thông tin chi tiết</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                while($row = $item_list->fetch_array(MYSQLI_BOTH)){
                    $name = $row['name'];
                    $quantity = $row['quantity'];
                    $price = $row['price'];
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$name</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>$price</td>";
                    echo "</tr>";
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<?php
    include 'include/footer.php';
?>