<?php

    include '../core/process.php';
    if(!checkAdmin()){
        header('Location: ../login');
    }
    include 'include/header.php';

    $carts = getAllCart();

?>

<div class="container">
<h2 class="title">Đơn hàng</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>User</th>
                <th>Tổng tiền</th>
                <th>Thời gian</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                while($row = $carts->fetch_array(MYSQLI_BOTH)){
                    $username = $row['userName'];
                    $price = $row['totalPrice'];
                    $time = $row['time'];
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$username</td>";
                    echo "<td>$price</td>";
                    echo "<td>$time</td>";
                    echo "</tr>";
                    $i++;
                }
            ?>
        </tbody>
    </table>
</div>

<?php include 'include/footer.php'; ?>