<?php

    include '../core/process.php';
    if(!checkAdmin()){
        header('Location: ../login');
    }
    include 'include/header.php';


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conn = newConnection();
        $query = "SELECT * FROM Products WHERE productId=".$id;
        $result = $conn->query($query);
        $product = $result->fetch_array(MYSQLI_BOTH);
        $name = $product['name'];
        $price = $product['price'];
        $des = $product['des'];
        $url1 = $product['url1'];
        $url2 = $product['url2'];
        $url3 = $product['url3'];
        $url4 = $product['url4'];
        $id = $product['productId'];


        $conn->close();
    }
    else {
        header('Location: product-list');
    }

?>
</body>
<link rel="stylesheet" href="../assets/css/common.css">
<body style="margin-top: -25px; padding: 0; font-family: Roboto, sans-serif;">
<div class="container container-product padding-top">
    <h2 class="title">Product info</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
            <img src=<?php echo "$url1"; ?> id="img1" class="img-large img-focus" alt="">
            <img src=<?php echo "$url1"; ?> id="img2" class="img-small col-md-3" alt="">
            <img src=<?php echo "$url2"; ?> id="img3" class="img-small col-md-3" alt="">
            <img src=<?php echo "$url3"; ?> id="img4" class="img-small col-md-3" alt="">
            <img src=<?php echo "$url4"; ?> id="img5" class="img-small col-md-3" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-product">
                <div class="name-product">
                    <?php echo $name; ?>
                </div>
                <div class="description">
                    <?php echo $des; ?>
                </div>
                <div class="price-product">
                    <?php echo $price; ?> $
                </div>
                <div class="rate">
                    <span class="rate-title">Đánh giá:</span>
                    <span class="star">
                        <span style="margin-right: 5px;">
                            <?php echo $product['rate']; ?>
                        </span>
                        <i class='fa fa-star'></i>

                    <span class="quantity-rate">(<?php echo $product['rateQuantity']; ?>)</span>
                    </span>
                </div>
            
                <a class="btn btn-primary btn-add-to-cart" type="submit" href=<?php echo "'edit-product?id=$id'"; ?>>Chỉnh sửa</a>
                
            </div>
        </div>
    </div> 
</div>

<div class="container">
    <input type="hidden" name="id" id="id" value=<?php echo "$id"; ?>>
    <div class="row">
        <h5 class="cmt-title">Phản hồi:</h5>
        <div class="comment" id="comment-box">
            <div class="form-group">
                <textarea name="respone" id="respone" rows="5" class="form-control" placeholder="Viết phản hồi..."></textarea>
            </div>
            <button class="btn btn-primary" id="send-respone">Gửi phản hồi</button>

        </div>
    </div>
    
    <div class="row">
        <div class="comment">
            <button class="btn btn-primary" class="load-comment" id="load-comment-admin">Xem bình luận</button>
            <div class="cmt-item" id="cmt-item">
            </div>
        </div>
    </div>
</div>


<script src="../assets/js/product.js"></script>

<?php
    include 'include/footer.php';
?>