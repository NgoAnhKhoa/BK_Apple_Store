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
    <table class="table table-striped">
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
                    $totalPrice += $price * $quantity;
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$name</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>$price</td>";
                    echo "</tr>";
                    $i++;
                }
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo '<td class="text-right">Tổng</td>';
                echo '<td>$ ' . $totalPrice . '</td>';
                echo "</tr>";

                $ship = round($totalPrice*0.05, 2);
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo '<td class="text-right">Ship</td>';
                echo '<td>$ ' . $ship . '</td>';
                echo "</tr>";

                $totalPrice = round($totalPrice + $ship, 2);
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo '<td class="text-right"><strong>Tổng cộng</strong></td>';
                echo '<td>$ ' . $totalPrice . '</td>';
                echo "</tr>";
            ?>
        </tbody>
    </table>
</div>

<?php
    include 'include/footer.php';
?>