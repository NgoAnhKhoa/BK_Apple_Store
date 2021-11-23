
<?php

    include '../core/process.php';
    if(!checkAdmin()){
        header('Location: ../login');
    }
    include 'include/header.php';

    $id = NULL;
    $q = NULL;
    $price = NULL;
    if(isset($_GET['id'])) $id = $_GET['id'];
    if(isset($_GET['q'])) $q = $_GET['q'];
    if(isset($_GET['price'])) $price = $_GET['price'];
    $result = getAllProduct($id, $q, $price);


?>
<div class="container product-list-container" style="padding-top: 130px;">
    <a class="btn btn-primary more-button" href="add-product" style='margin-bottom: 15px;'>Add product</a>
    <div class="row">
        
        <div class="col-12 col-md-4 col-lg-3 bg-light filter-left">
            <h3 class="title-filter">Filter</h3>
            <hr style="border: 1px solid gray;">
            <form action="" method="get">
                <div class="from-group form-group-filter">
                    <input type="text" class="form-control search" name="q" id="search" placeholder="Search..." value=<?php if($q) echo "'$q'";?>>
                    <div class="type-select" class="form-control">
                        <div class="title-type-search">Product type:</div>
                        <input type="radio" name="id" id="all" value="0" <?php if($id==NULL || intval($id)==0) echo "checked"; ?>>
                        <label for="all">All</label><br>
                        <input type="radio" name="id" id="mac-air" value="1" <?php if(intval($id)==1) echo "checked"; ?>>
                        <label for="mac-air">MacBook Air</label><br>
                        <input type="radio" name="id" id="mac-pro" value="2" <?php if(intval($id)==2) echo "checked"; ?>>
                        <label for="mac-pro">MacBook Pro</label><br>
                        <input type="radio" name="id" id="imac" value="3" <?php if(intval($id)==3) echo "checked"; ?>>
                        <label for="imac">iMac</label><br>
                        <input type="radio" name="id" id="ipad-air" value="4" <?php if(intval($id)==4) echo "checked";?>>
                        <label for="ipad-air">iPad Air</label><br>
                        <input type="radio" name="id" id="ipad-pro" value="5" <?php if(intval($id)==5) echo "checked"; ?>>
                        <label for="ipad-pro">iPad Pro</label><br>
                        <input type="radio" name="id" id="ipad-mini" value="6" <?php if(intval($id)==6) echo "checked"; ?>>
                        <label for="ipad-mini">iPad Mini</label><br>
                        <input type="radio" name="id" id="iphone-13" value="7" <?php if(intval($id)==7) echo "checked"; ?>>
                        <label for="iphone-13">iPhone 13</label><br>
                        <input type="radio" name="id" id="iphone-12" value="8" <?php if(intval($id)==8) echo "checked"; ?>>
                        <label for="iphone-12">iPhone 12</label><br>
                        <input type="radio" name="id" id="iphone-11" value="9" <?php if(intval($id)==9) echo "checked"; ?>>
                        <label for="iphone-11">iPhone 11</label><br>
                        <input type="radio" name="id" id="watch-series-7" value="10" <?php if(intval($id)==10) echo "checked"; ?>>
                        <label for="watch-series-7">Apple Watch Series 7</label><br>
                        <input type="radio" name="id" id="watch-se" value="11" <?php if(intval($id)==11) echo "checked"; ?>>
                        <label for="watch-se">Apple Watch SE</label><br>
                        <input type="radio" name="id" id="watch-series-3" value="12" <?php if(intval($id)==12) echo "checked"; ?>>
                        <label for="watch-series-3">Apple Watch Series 3</label><br>
                        <input type="radio" name="id" id="watch-nike" value="13" <?php if(intval($id)==13) echo "checked"; ?>>
                        <label for="watch-nike">Apple Watch Nike</label><br>
                    </div>
                    <div class="type-select" class="form-control">
                        <div class="title-type-search">Price:</div>
                        <input type="radio" name="price" id="option1" value="1" <?php if(intval($price)==1) echo "checked"; ?>>
                        <label for="option1">Less than 100.000 ₫</label><br>
                        <input type="radio" name="price" id="option2" value="2" <?php if(intval($price)==2) echo "checked"; ?>>
                        <label for="option2">Between 100.000 and 500.000 ₫</label><br>
                        <input type="radio" name="price" id="option3" value="3" <?php if(intval($price)==3) echo "checked"; ?>>
                        <label for="option3">Between 500.000 and 1.000.000 ₫</label><br>
                        <input type="radio" name="price" id="option4" value="4" <?php if(intval($price)==4) echo "checked"; ?>>
                        <label for="option4">Between 1.000.000 and 2.000.000 ₫</label><br>
                        <input type="radio" name="price" id="option5" value="5" <?php if(intval($price)==5) echo "checked"; ?>>
                        <label for="option5">Greater than 2.000.000 ₫</label><br>
                    </div>
                </div>
                <input class="btn btn-primary btn-filter" type="submit" value="Lọc">
            </form>
        </div>

        <div class="col">
            <div class="row">
            
                <?php
                    if($result->num_rows==0){
                        echo "<i style='margin-left:20px;'>No products found.</i>";
                    }
                    else {
                    while($row = $result->fetch_array(MYSQLI_BOTH)){
                        $productId = $row['productId'];
                ?>
                    <div class='col-12 col-md-6 col-lg-4'>
                        <div class='card-product-list' style='margin-bottom: 20px'>
                            <a href=<?php echo "product.php?id=$productId"; ?>><img class='card-img-top' src=<?php $url = $row['url1']; echo "'$url'";?> alt='Card image cap'></a>
                            <div class='card-body'>
                                <h4 class='card-title'><a href=<?php echo "product.php?id=$productId"; ?> title='View Product'><?php echo $row['name'];?></a></h4>
                                <p class='card-text'><?php echo $row['des'];?></p>
                                <div class='row'>
                                    <div class='col'>
                                        <div class='price-product-list'><?php echo $row['price']; ?> ₫</div>
                                    </div>
                                    <div class='col'>
                                        <a href=<?php echo "edit-product?id=$productId"; ?> class='btn btn-success btn-block'>Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    } }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    include 'include/footer.php';
?>