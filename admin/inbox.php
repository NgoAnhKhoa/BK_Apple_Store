<?php 

    include '../core/process.php';
    if(!checkAdmin()){
        header('Location: ../login');
    }
    include 'include/header.php';

    $inboxList = getInbox();
?>

<div class="container">
    <h2 class="title">Hộp thư</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Thời gian</th>
                <th>Xem</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = $inboxList->fetch_array(MYSQLI_BOTH)){
                    $id = $row['messageId'];
                    $userName = $row['userName'];
                    $time = $row['time'];
                    $msg = $row['content'];
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$userName</td>";
                    echo "<td>$time</td>";
                    echo "<td><button class='btn btn-success' id='seeDetailBtn$id' value='1' onclick=".'"seeDetail('."'$msg'".", $id".')"'.">Xem</button></button>";
                    echo "</tr>";
                    echo "<tr id='detail$id'></tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<script src="./assets/js/script.js"></script>

<?php
    include 'include/footer.php';
?>