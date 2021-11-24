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
    <h2 class="title">List of Users</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>User name</th>
                <th>Email</th>
                <th>State</th>
                <th></th>
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
                    // echo "<td><a href='lock_user.php?id=$id' style='color: red;'>Lock</a></td>";
                    echo '<td><a href="lock_user.php?id=' . $id . '"><i class="fa fa-unlock"></i></a></td>';
                }
                else {
                    // echo "<td><a href='unlock_user.php?id=$id' style='color: green;'>Unlock</a></td>";
                    echo '<td><a href="unlock_user.php?id=' . $id . '"><i class="fa fa-lock" style="color: red;"></i></a></td>';
                }
                echo '<td><a style="color:red;text-decoration:none;" href="delete_user.php?id=' . $id . '">Delete</td>';
                echo "</tr>";
            } ?>
        </tbody>
    </table>
    <a class="btn btn-primary more-button" href="add-account">Add Account</a>
</div>


<?php include 'include/footer.php'; ?>