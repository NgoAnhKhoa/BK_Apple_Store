<?php
    include "./core/process.php";
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

    $screen = get_HightLight(12);
?>


  <!-- Screen -->
  <link rel="stylesheet" href="./assets/css/common.css">
  <div class="container padding-top">
    <h2 class="title">Màn hình</h2>
    <div class="row">
      <?php
        while($row = $screen->fetch_array(MYSQLI_BOTH)) {
          $url = $row['url1'];
          $name = $row['name'];
          $id = $row['productId'];
          $des = $row['des'];
      ?>
      <div class="col-md-4">
        <a href=<?php echo "product.php?id=$id"; ?> class="card-link">
          <div class="card">
            <img src=<?php echo "$url"; ?> alt="hight light image" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $name; ?>
              </h5>
              <p class="card-text">
                <?php echo $des; ?>
              </p>
              <br>
              <a href=<?php echo "product.php?id=$id"; ?> class="btn btn-primary btn-card">Xem ngay</a>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
    <a class="btn btn-primary more-button" href="product-list?id=12&page=1">Xem thêm</a>
  </div>
  <!-- End Screen -->

<?php
    include 'include/footer.php';
?>