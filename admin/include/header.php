
<?php
    $uri = $_SERVER['PHP_SELF'];
    $title = "";
    $route = "";
    switch($uri){
        case "/BK_Apple_Store/admin/index.php":
        case "/BK_Apple_Store":
            $route = "home";
            $title = "Admin | Trang chủ";
            break;
        case "/BK_Apple_Store/admin/product_list.php":
            $route = "product_list";
            $title = "Admin | Danh sách sản phẩm";
            break;
        // case "/BK_Apple_Store/tvav.php":
        //     $route = "product";
        //     $title = "TV & AV";
        //     break;
        // case "/BK_Apple_Store/appliance.php":
        //     $route = "product";
        //     $title = "Gia dụng";
        //     break;
        // case "/BK_Apple_Store/screen.php":
        //     $title = "Màn hình";
        //     $route = "product";
        //     break;
        // case "/BK_Apple_Store/about.php":
        //     // $route = "about";
        //     $title = "Khám phá";
        //     break;
        // case "/BK_Apple_Store/contact.php":
        //     // $route = "contact";
        //     $title = "Liên hệ";
        //     break;
        case "/BK_Apple_Store/admin/add_user.php":
            $route = "add_user";
            $title = "Admin | Thêm user";
            break;
        case "/BK_Apple_Store/admin/inbox.php":
            $route = "inbox";
            $title = "Admin | Hộp thư";
            break;
        // case "/BK_Apple_Store/product_list.php":
        //     $title = "Danh sách sản phẩm";
        //     break;
        case "/BK_Apple_Store/admin/product.php":
            $title = "Admin | Sản phẩm";
            break;
        case "/BK_Apple_Store/admin/user_info.php":
            $title = "Admin | Thông tin admin";
            break;
        case "/BK_Apple_Store/admin/edit_product.php":
            $title = "Admin | Chỉnh sửa sản phẩm";
            break;
        case "/BK_Apple_Store/admin/edit_hightlight.php":
            $title = "Admin | Chỉnh sửa thông tin nổi bật";
            break;
        case "/BK_Apple_Store/admin/cart_user.php":
            $title = "Admin | Đơn hàng người dùng";
            break;
        case "/BK_Apple_Store/admin/user_list.php":
            $title = "Admin | Danh sách User";
            $route = "user_list";
            break;
        case "/BK_Apple_Store/admin/add_product.php":
            $title = "Admin | Thêm sản phẩm";
            break;
    }


?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            echo $title;
        ?>
    </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <script src="../assets/js/script.js" type="text/javascript"></script>
</head>
<body>

<!-- scroll button -->
<div class="scroll-up-btn">
    <i class="fa fa-angle-up"></i>
</div>

<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="home" style="display: flex;">
        <img src="../assets/images/apple_logo.jpeg" alt="logo" class="logo" style="width: 60px;">
        <h1 style="margin: 10px 0px 0px 20px;">BK Apple Store</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col-auto">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class=<?php echo $route == 'home'? "'nav-item active'": "nav-item" ?>>
                        <a class="nav-link" href="home">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class=<?php echo $route == 'product'? "'nav-item active dropdown'": "'nav-item dropdown'" ?>>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="mobile.php">Di động</a>
                            <a class="dropdown-item" href="tvav.php">TV & AV</a>
                            <a class="dropdown-item" href="appliance.php">Gia dụng</a>
                            <a class="dropdown-item" href="screen.php">Màn hình</a>
                        </div>
                    </li> -->
                    <li class=<?php echo $route == 'product_list'? "'nav-item active'": "nav-item" ?>>
                        <a href="product-list" class="nav-link">
                            Danh sách sản phẩm
                        </a>
                    </li>
                    <li class=<?php echo $route == 'add_user'? "'nav-item active'": "nav-item" ?>>
                        <a href="add-user" class="nav-link">
                            Thêm User
                        </a>
                    </li>
                    <li class=<?php echo $route == 'user_list'? "'nav-item active'": "nav-item" ?>>
                        <a href="user-list" class="nav-link">
                           Danh sách User
                        </a>
                    </li>
                    <li class=<?php echo $route == 'inbox'? "'nav-item active'": "nav-item" ?>>
                        <a href="inbox" class="nav-link">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $_SESSION['user']['userName'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="user-info">Thông tin admin</a>
                            <a href="cart-user" class="dropdown-item">Đơn hàng người dùng</a>
                            <a class="dropdown-item" href="../core/auth.php?logout=true">Đăng xuất</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>