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

    $hightlight = get_HightLight(15);
    $fridge = get_HightLight(8);
    $washing_machine = get_HightLight(9);
    $cleaner = get_HightLight(10);
    $kitchen = get_HightLight(11);
    
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
  <!-- End Hightlight -->

  <!-- fridge -->
  <div class="container">
    <h2 class="title">Tủ lạnh</h2>
    <div class="row">
      <?php
        while($row = $fridge->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=8&page=1">Xem thêm</a>
  </div>
  <!-- End fridge -->

  <!-- washing machine -->
  <div class="container">
    <h2 class="title">Máy giặt</h2>
    <div class="row">
      <?php
        while($row = $washing_machine->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=9&page=1">Xem thêm</a>
  </div>
  <!-- End washing machine -->


  <!-- vacuum cleaner -->
  <div class="container">
    <h2 class="title">Máy hút bụi</h2>
    <div class="row">
      <?php
        while($row = $cleaner->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=10&page=1">Xem thêm</a>
  </div>
  <!-- End vacuum cleaner -->

    <!-- kitchen -->
  <div class="container">
    <h2 class="title">Dụng cụ nhà bếp</h2>
    <div class="row">
      <?php
        while($row = $kitchen->fetch_array(MYSQLI_BOTH)) {
          $url = $row['url1'];
          $name = $row['name'];
          $id = $row['productId'];
          $des = $row['des'];
      ?>
      <div class="col-md-4">
        <a href="#" class="card-link">
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
    <a class="btn btn-primary more-button" href="product-list?id=11&page=1">Xem thêm</a>
  </div>
    <!-- End kitchen -->

<?php
    include 'include/footer.php';
?>