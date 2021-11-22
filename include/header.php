
<?php
    $uri = $_SERVER['PHP_SELF'];
    $route = "";
    $title = "";
    switch($uri){
        case "/BK_Apple_Store/index.php":
        case "/BK_Apple_Store":
            $route = "home";
            $title = "Trang chủ";
            break;
        case "/BK_Apple_Store/mobile.php":
            $route = "product";
            $title = "Di động";
            break;
        case "/BK_Apple_Store/tvav.php":
            $route = "product";
            $title = "TV & AV";
            break;
        case "/BK_Apple_Store/appliance.php":
            $route = "product";
            $title = "Gia dụng";
            break;
        case "/BK_Apple_Store/screen.php":
            $title = "Màn hình";
            $route = "product";
            break;
        case "/BK_Apple_Store/about.php":
            $route = "about";
            $title = "Khám phá";
            break;
        case "/BK_Apple_Store/contact.php":
            $route = "contact";
            $title = "Liên hệ";
            break;
        case "/BK_Apple_Store/cart.php":
            $route = "cart";
            $title = "Giỏ hàng";
            break;
        case "/BK_Apple_Store/product_list.php":
            $title = "Danh sách sản phẩm";
            break;
        case "/BK_Apple_Store/product.php":
            $title = "Sản phẩm";
            break;
        case "/BK_Apple_Store/user_info.php":
            $route = "user_info";
            $title = "Thông tin người dùng";
            break;
        case "/BK_Apple_Store/cart_history.php":
            $route = "cart_history";
            $title = "Lịch sử mua hàng";
            break;
        case "/BK_Apple_Store/cart-detail.php":
            $title = "Chi tiết đơn hàng";
            break;
        default:
            $title = "404 Not Found";
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
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">

    <script src="./assets/js/script.js" type="text/javascript"></script>
    <style>
        .rainbow-text {
	    font-family: Arial;
	    font-weight: bold;
	    font-size: 40px;
	    -webkit-text-stroke-width: 1px;
	    -webkit-text-fill-color: transparent;
        }
        .rainbow-text .block-line > span {
        	display: inline-block;
        }
    </style>
</head>
<body>

<!-- scroll button -->
<!-- <div class="scroll-up-btn">
    <i class="fa fa-angle-up"></i>
</div> -->

<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light" style="position: fixed; z-index: 100; margin-left: auto; width: 100%; margin-top: -15px; background-color: #afafaf; height:90px">
    <div class="container">
        <a class="navbar-brand" href="home" style="display: flex;">
            <img src="./assets/images/logo_apple_1.png" alt="logo" class="logo" style="width: 60px;">
            <div class="rainbow-text" style="text-align: center; margin: 5px 0px 0px 10px">
	            <span class="block-line"><span><span style="color:#ff0000;">B</span><span style="color:#ff8000;">K&nbsp;</span></span><span><span style="color:#ffff00;">A</span><span style="color:#80ff00;">p</span><span style="color:#00ff00;">p</span><span style="color:#00ff80;">l</span><span style="color:#00ffff;">e&nbsp;</span></span><span><span style="color:#007fff;">S</span><span style="color:#0000ff;">t</span><span style="color:#7f00ff;">o</span><span style="color:#ff00ff;">r</span><span style="color:#ff0080;">e</span></span></span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col-auto">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class=<?php echo $route == 'home'? "'nav-item active'": "nav-item" ?>>
                        <a class="nav-link" href="home">Home page <span class="sr-only">(current)</span></a>
                    </li>
                    <li class=<?php echo $route == 'product'? "'nav-item active dropdown'": "'nav-item dropdown'" ?>>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="mobile">Di động</a>
                            <a class="dropdown-item" href="tvav">TV & AV</a>
                            <a class="dropdown-item" href="appliance">Gia dụng</a>
                            <a class="dropdown-item" href="screen">Màn hình</a>
                        </div> -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="mac">Mac</a>
                            <a class="dropdown-item" href="ipad">iPad</a>
                            <a class="dropdown-item" href="iphone">iPhone</a>
                            <a class="dropdown-item" href="watch">Watch</a>
                        </div>
                    </li>
                    <li class=<?php echo $route == 'about'? "'nav-item active'": "nav-item" ?>>
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class=<?php echo $route == 'contact'? "'nav-item active'": "nav-item" ?>>
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <form id="demo-2" action="product_list.php" method="GET">
                            <input type="search" placeholder="Search" name='q'>
                            <input type="submit" 
                                style="position: absolute; left: -9999px; width: 1px; height: 1px;"
                                tabindex="-1" />
                        </form>
                    </li>
                    <li class=<?php echo $route == 'cart'? "'nav-item active'": "nav-item" ?>>
                        <a href="cart.php" class="nav-link">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <?php echo $_SESSION['user']['userName'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item <?php echo $route == 'user_info'? "active": "" ?>" href="user-info">User infomation</a>
                            <a href="cart-history" class="dropdown-item <?php echo $route == 'cart_history'? "active": "" ?>">Order history</a>
                            <a class="dropdown-item" href="core/auth.php?logout=true">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>