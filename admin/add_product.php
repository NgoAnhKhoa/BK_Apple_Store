<?php 

    include '../core/process.php';
    if(!checkAdmin()){
        header('Location: ../login');
    }
    
    $correctPrice = true;
    $correctName = true;
    $correctUrl1 = true;
    $correctUrl2 = true;
    $correctUrl3 = true;
    $correctUrl4 = true;
    $success = true;

    
    $name = '';
    $price = '';
    $des = '';
    $url1 = '';
    $url2 ='';
    $url3 = '';
    $url4 = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $des = $_POST['des'];
        $url1 = $_POST['url1'];
        $url2 = $_POST['url2'];
        $url3 = $_POST['url3'];
        $url4 = $_POST['url4'];
        $type = $_POST['type'];

        if($url2=='') $url2 = $url1;
        if($url3=='') $url3 = $url1;
        if($url4=='') $url4 = $url1;

        $price = round($price, 2);

        $conn = newConnection();
        $query = "INSERT INTO `Products` (`name`, `price`, `des`, `url1`, `url2`, `url3`, `url4`, `type`) VALUES ('$name', $price, '$des', '$url1', '$url2', '$url3', '$url4', $type)";
        $result = $conn->query($query);
        if($result){
            header("Location: product-list");
        }
        else{
            $success = false;
        }
        $conn->close();
    }

    include 'include/header.php';

    

?>
<link rel="stylesheet" href="../assets/css/common.css">
<div class="container padding-top">
    <h2 class="title">Add product</h2>
    <form action="" method="POST" id="edit-product">
        <div class="form-group">
            <label for="name">Tên</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Tên sản phẩm..." required value=<?php echo "'$name'"; ?>>
            <div><small class='log-fail' id='log-name'></small></div>
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                <div class="input-group-text">$</div>
                </div>
                <input type="text" class="form-control" name="price" id="price" placeholder="Giá sản phẩm..." required value=<?php echo "$price"; ?>>
                
            </div>
            <div><small class='log-fail' id='log-price'></small></div>
        </div>
        <div class="form-group">
            <label for="image1">Hình ảnh 1</label>
            <input type="text" class="form-control" name="url1" id="url1" placeholder="Url hình ảnh 1" required value=<?php echo "'$url1'"; ?>>
        </div>
        <div class="form-group">
            <label for="image2">Hình ảnh 2</label>
            <input type="text" class="form-control" name="url2" id="url2" placeholder="Url hình ảnh 2" value=<?php echo "'$url2'"; ?>>
        </div>
        <div class="form-group">
            <label for="image3">Hình ảnh 3</label>
            <input type="text" class="form-control" name="url3" id="url3" placeholder="Url hình ảnh 3" value=<?php echo "'$url3'"; ?>>
        </div>
        <div class="form-group">
            <label for="image4">Hình ảnh 4</label>
            <input type="text" class="form-control" name="url4" id="url4" placeholder="Url hình ảnh 4" value=<?php echo "'$url4'"; ?>>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" name="des" id="des" cols="30" rows="10" placeholder="Mô tả..."><?php echo "$des"?></textarea>
        </div>
        <div class="form-group">
            <label for="type">Loại sản phẩm</label>
            <select name="type" id="type" class="form-control">
                <option value="1">Điện thoại</option>
                <option value="2">Tablet</option>
                <option value="3">Đồng hồ</option>
                <option value="4">Phụ kiện di động</option>
                <option value="5">TVs</option>
                <option value="6">Lifestyle TVs</option>
                <option value="7">Thiết bị nghe nhìn</option>
                <option value="8">Tủ lạnh</option>
                <option value="9">Máy giặt</option>
                <option value="10">Máy hút bụi</option>
                <option value="11">Dụng cụ nhà bếp</option>
                <option value="12">Màn hình</option>
            </select>
        </div>
        <div>
            <?php if(!$success) { ?>
            <small class="log-fail">Thêm không thành công.</small>
            <?php } ?>
        </div>
        <input class="btn btn-primary" type="submit" value="Xong">
    </form>
</div>


<script src="../assets/js/check.js"></script>
<?php
    include 'include/footer.php';
?>