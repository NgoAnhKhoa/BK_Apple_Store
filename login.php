<?php
  include "./core/auth.php";

  $success = true;
  $log = "";

  $email= "";
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $log = Auth($email,$password);
    $success = false;
  }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
  <div class="center">
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <div class="txt_field">
            <input type="email" name="email" id="email" required value=<?php echo "'$email'"; ?>>
            <span></span>
            <label for="username">Email</label>
        </div>
        <div class="txt_field">
            <input type="password" name="password" id="password" required>
            <span></span>
            <label for="password">Mật khẩu</label>
        </div>
        <div class="pass"><a href="#">Quên mật khẩu?</a> </div>
        <?php
          if($log!="") {
            echo "<small class='log-fail'>$log</small>";
          }
        ?>
        <input type="submit" value="Đăng nhập">
        <div class="signup_link">
            Bạn chưa có tài khoản ?
            <a href="signup">Đăng ký</a>
        </div>
        <div class="signup_link">
          <a href="home">Về trang chủ</a>
        </div>
    </form>
</div>
  
  
  <script src="./js/script.js"></script>
</body>
</html>