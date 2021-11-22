<?php
    include "./core/process.php";
    if(checkLogin()){
      if(checkAdmin()) {
        header('Location: admin/');
      }
      else {
        include "include/header.php";   
      }
           
    }
    else{
      include "include/header_notlogin.php";
    }

    $hightlight = get_HightLight(13);
    $smartPhone = get_HightLight(1);
    $tablet = get_HightLight(2);
    $smartWatch = get_HightLight(3);
    $accessories = get_HightLight(4);
    
?>

  <!-- Hightlight -->
  <link rel="stylesheet" href="./assets/css/common.css">
  <div class="container padding-top">
    <h2 class="title">Nổi bật</h2>
    <div class="row">
      <?php
        while($row = $hightlight->fetch_array(MYSQLI_BOTH)) {
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
  </div>
  <!-- Hightlight -->

  <!-- Smart phone -->
  <div class="container">
    <h2 class="title">Điện thoại di động</h2>
    <div class="row">
      <?php
        while($row = $smartPhone->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=1">Xem thêm</a>
  </div>
  <!-- End Smart Phone -->

    <!-- Tablet -->
  <div class="container">
    <h2 class="title">Máy tính bảng</h2>
    <div class="row">
      <?php
        while($row = $tablet->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=2">Xem thêm</a>
  </div>
  <!-- End Tablet -->

  <!-- Smart watch -->
  <div class="container">
    <h2 class="title">Đồng hồ thông minh</h2>
    <div class="row">
      <?php
        while($row = $smartWatch->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=3">Xem thêm</a>
  </div>
  <!-- End Smart watch -->

  <!-- accessories -->
  <div class="container">
    <h2 class="title">Phụ kiện</h2>
    <div class="row">
      <?php
        while($row = $accessories->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=4">Xem thêm</a>
  </div>
  <!-- End accessories -->

<?php
    include 'include/footer.php';
?>