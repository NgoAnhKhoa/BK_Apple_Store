<?php 

    include '../core/process.php';
    if(!checkAdmin()){
        header('Location: ../login');
    }
    include 'include/header.php';

    $wrongEmail = false;

    $log = -1;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        if(isExistEmail($email)){
            $log = 2;
        }
        else {
            $result = addUser($name, $email, $password, $type);
            if($result) $log = 1;
            else $log = 0;
        }
        
    }

?>
<link rel="stylesheet" href="../assets/css/common.css">
<div class="container padding-top">
    <h2 class="title">Add User</h2>
    <form action="" method="POST" id="add-user">
    <div class="form-group">
        <label for="name">Username:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nhập username" required>
        <small class="log-fail" id="name-log"></small>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email" required>
        <?php if($wrongEmail) { ?>
            <small class="log-fail" id="email-log">Email đã tồn tại.</small>
        <?php } ?>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu" required>
            <small class="log-fail" id="password-log"></small>
        </div>
        <div class="form-group col-md-6">
            <label for="confirm-password" id='label_confirm'>Nhập lại mật khẩu:</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu" required onkeyup="check();">
            <small class="log-fail" id="password-match"></small>
        </div>
    </div>
    <div class="form-group">
        <label for="type">Loại tài khoản</label>
        <select name="type" id="type" class="custom-select">
            <option value="0">Người dùng bình thường</option>
            <option value="1">Admin</option>
        </select>
    </div>
    <div>
        <?php if($log!=-1) {
            if($log==1)
                echo "<i class='log-success' style='color: green'>Thành công</i>";
            elseif($log == 2)
                echo "<i class='log-fail'>Email đã tồn tại. Vui lòng kiểm tra lại</i>";
            else
                echo "<i class='log-fail'>Thất bại. Vui lòng kiểm tra lại</i>";
        } ?>
    </div>
    <input class="btn btn-primary" value="Xong" type="submit"/>
    </form>
</div>

<script src="../assets/js/check.js"></script>

<?php
    include 'include/footer.php';
?>