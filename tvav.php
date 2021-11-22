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

    $hightlight = get_HightLight(14);
    $tvs = get_HightLight(5);
    $lifestyleTvs = get_HightLight(6);
    $devices = get_HightLight(7);
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

<!-- TVs -->
  <div class="container">
    <h2 class="title">TVs</h2>
    <div class="row">
      <?php
        while($row = $tvs->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=5">Xem thêm</a>
  </div>
<!-- End TVs -->

<!-- Lifestyle TVs -->
  <div class="container">
    <h2 class="title">Lifestyle TVs</h2>
    <div class="row">
      <?php
        while($row = $lifestyleTvs->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=6">Xem thêm</a>
  </div>
<!-- End Lifestyle TVs -->

<!-- devices -->
  <div class="container">
    <h2 class="title">Thiết bị nghe nhìn</h2>
    <div class="row">
      <?php
        while($row = $devices->fetch_array(MYSQLI_BOTH)) {
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
    <a class="btn btn-primary more-button" href="product-list?id=7">Xem thêm</a>
  </div>
<!-- End devices -->

<?php
    include 'include/footer.php';
?>