<?php
    include '../core/process.php';
    if(!checkAdmin()){
        header('Location: ../login');
    }
    include 'include/header.php';

    $user = getUserList();

?>
<link rel="stylesheet" href="../assets/css/common.css">
<div class="container padding-top">
    <h2 class="title">Danh sách User</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>User name</th>
                <th>Email</th>
                <th>Khóa</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $user->fetch_array(MYSQLI_BOTH)) {
                $id = $row['userId'];
                $name = $row['userName'];
                $email = $row['email'];
                $state = $row['state'];
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$name</td>";
                echo "<td>$email</td>";
                if($state) {
                    echo "<td><a href='lock_user.php?id=$id' style='color: red;'>Khóa</a></td>";
                }
                else {
                    echo "<td><a href='unlock_user.php?id=$id' style='color: green;'>Mở khóa</a></td>";
                }
                echo "</tr>";
            } ?>
        </tbody>
    </table>
</div>

<?php include 'include/footer.php'; ?>