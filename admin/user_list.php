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
                    echo '<td><a href="lock_user.php?id=' . $id . '"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/cp0/258844251_6445222162219753_17915607980117620_n.png?_nc_cat=104&ccb=1-5&_nc_sid=aee45a&_nc_ohc=Y9ekoctgjiIAX8s0OY4&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=a4a4f722f899ead7c4759c4c797c8396&oe=61C246C1"></a></td>';
                }
                else {
                    // echo "<td><a href='unlock_user.php?id=$id' style='color: green;'>Unlock</a></td>";
                    echo '<td><a href="unlock_user.php?id=' . $id . '"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/cp0/256662355_4552326314881717_4362225884319688671_n.png?_nc_cat=101&ccb=1-5&_nc_sid=aee45a&_nc_ohc=FGWBmzCE-IMAX9w_ciT&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=d968281da3c1812c829b42388282d01e&oe=61C12F1A"></a></td>';
                }
                echo "</tr>";
            } ?>
        </tbody>
    </table>
    <a class="btn btn-primary more-button" href="add-account">Add Account</a>
</div>
<p style="height: 336px;"></p>
<?php include 'include/footer.php'; ?>