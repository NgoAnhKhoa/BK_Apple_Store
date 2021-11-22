
<?php

    include './core/process.php';
    if(checkLogin()){
        if(checkAdmin()) {
          header('Location: admin/product-list');
        }
        else {
          include "include/header.php"; 
        }
             
      }
      else{
        include "include/header_notlogin.php";
      }    


    $id = NULL;
    $q = NULL;
    $price = NULL;
    $begin = NULL;
    if(isset($_GET['id'])) $id = $_GET['id'];
    if(isset($_GET['q'])) $q = $_GET['q'];
    if(isset($_GET['price'])) $price = $_GET['price'];
    
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    
    if($page=='' || $page==1){
        $begin = 0;
    }
    else{
        $begin = ($page-1)*6;
    }
    if ($id != 0)
        $result = searchProduct($id, $q, $price, $begin);
    else
        $result = getAllProduct(0, $q, $price);
    

?>


<div class="container product-list-container">
    <div class="row">
        
        <div class="col-12 col-md-4 col-lg-3 bg-light filter-left">
            <h3 class="title-filter">Bộ lọc</h3>
            <hr style="border: 1px solid gray;">
            <form action="" method="get">
                <div class="from-group form-group-filter">
                    <input type="text" class="form-control search" name="q" id="search" placeholder="Search..." value=<?php if($q) echo "'$q'";?>>
                    <div class="type-select" class="form-control">
                        <div class="title-type-search">Loại sản phẩm:</div>
                        <input type="radio" name="id" id="all" value="0" <?php if($id==NULL || intval($id)==0) echo "checked"; ?>>
                        <label for="all">Tất cả</label><br>
                        <input type="radio" name="id" id="smart-phone" value="1" <?php if(intval($id)==1) echo "checked"; ?>>
                        <label for="smart-phone">Điện thoại thông minh</label><br>
                        <input type="radio" name="id" id="tablet" value="2" <?php if(intval($id)==2) echo "checked"; ?>>
                        <label for="tablet">Máy tính bảng</label><br>
                        <input type="radio" name="id" id="smart-watch" value="3" <?php if(intval($id)==3) echo "checked"; ?>>
                        <label for="smart-watch">Đồng hồ thông minh</label><br>
                        <input type="radio" name="id" id="accessories" value="4" <?php if(intval($id)==4) echo "checked";?>>
                        <label for="accessories">Phụ kiện</label><br>
                        <input type="radio" name="id" id="tvs" value="5" <?php if(intval($id)==5) echo "checked"; ?>>
                        <label for="tvs">TVs</label><br>
                        <input type="radio" name="id" id="lifestyleTvs" value="6" <?php if(intval($id)==6) echo "checked"; ?>>
                        <label for="lifestyleTvs">Lifestyle TVs</label><br>
                        <input type="radio" name="id" id="devices" value="7" <?php if(intval($id)==7) echo "checked"; ?>>
                        <label for="devices">Thiết bị nghe nhìn</label><br>
                        <input type="radio" name="id" id="fridge" value="8" <?php if(intval($id)==8) echo "checked"; ?>>
                        <label for="fridge">Tủ lạnh</label><br>
                        <input type="radio" name="id" id="washing-machine" value="9" <?php if(intval($id)==9) echo "checked"; ?>>
                        <label for="washing-machine">Máy giặt</label><br>
                        <input type="radio" name="id" id="cleaner" value="10" <?php if(intval($id)==10) echo "checked"; ?>>
                        <label for="cleaner">Máy hút bụi</label><br>
                        <input type="radio" name="id" id="kitchen" value="11" <?php if(intval($id)==11) echo "checked"; ?>>
                        <label for="kitchen">Dụng cụ nhà bếp</label><br>
                        <input type="radio" name="id" id="screen" value="12" <?php if(intval($id)==12) echo "checked"; ?>>
                        <label for="screen">Màn hình</label><br>
                    </div>
                    <div class="type-select" class="form-control">
                        <div class="title-type-search">Giá:</div>
                        <input type="radio" name="price" id="option1" value="1" <?php if(intval($price)==1) echo "checked"; ?>>
                        <label for="option1">Dưới 100$</label><br>
                        <input type="radio" name="price" id="option2" value="2" <?php if(intval($price)==2) echo "checked"; ?>>
                        <label for="option2">Từ 100 đến 500$</label><br>
                        <input type="radio" name="price" id="option3" value="3" <?php if(intval($price)==3) echo "checked"; ?>>
                        <label for="option3">Từ 500 đến 1000$</label><br>
                        <input type="radio" name="price" id="option4" value="4" <?php if(intval($price)==4) echo "checked"; ?>>
                        <label for="option4">Từ 1000 đến 2000$</label><br>
                        <input type="radio" name="price" id="option5" value="5" <?php if(intval($price)==5) echo "checked"; ?>>
                        <label for="option5">Trên 2000$</label><br>
                    </div>
                    <input hidden type="text" name="page" value="1">
                </div>
                <input class="btn btn-primary btn-filter" type="submit" value="Lọc">
            </form>
        </div>

        <div class="col">
            <div class="row">
            
                <?php
                    if($result->num_rows==0){
                        echo "<i style='margin-left:20px;'>Không tìm thấy sản phẩm.</i>";
                    }
                    else {
                    while($row = $result->fetch_array(MYSQLI_BOTH)){
                        $productId = $row['productId'];
                ?>
                    <div class='col-12 col-md-6 col-lg-4'>
                        <div class='card-product-list' style='margin-bottom: 20px'>
                            <img class='card-img-top' src=<?php $url = $row['url1']; echo "'$url'";?> alt='Card image cap'>
                            <div class='card-body'>
                                <h4 class='card-title'><a href=<?php echo "product.php?id=$productId"; ?> title='View Product'><?php echo $row['name'];?></a></h4>
                                <p class='card-text'><?php echo $row['des'];?></p>
                                <div class='row'>
                                    <div class='col'>
                                        <div class='price-product-list'><?php echo $row['price']; ?> $</div>
                                    </div>
                                    <div class='col'>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    } }
                ?>
            </div>
            <?php 
            if($id!=NULL && intval($id)!=0){
            ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item" id="btn-prev">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <?php
                    $params=getParams();
                    $number_page = ceil(countResult($id)/6);
                    for( $i=1; $i <= $number_page; $i++ ){
                        $params['page']=$i;
                        printf('<li class="page-item page-num" id="page-%1$d"><a class="page-link" href="?%2$s">%1$d</a></li>', $i, buildQuery( $params ));
                    }
                    ?>
                    <li class="page-item" id="btn-next">
                      <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <?php } ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(() => {
        var searchParam = new URLSearchParams(window.location.search);
        var id = searchParam.get("id");
        var page = searchParam.get("page");
        if (page == 1 || page == null) {
            $("#btn-prev").addClass("disabled");
        }
        if (page == $(".page-num").length || page == null) {
            $("#btn-next").addClass("disabled");
        }
        $("#page-" + page).addClass("disabled");
        $("#btn-next a").attr("href", `?id=${id}&page=${parseInt(page)+1}`);
        $("#btn-prev a").attr("href", `?id=${id}&page=${parseInt(page)-1}`);
    });
</script>

<?php
    include 'include/footer.php';
?>