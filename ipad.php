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

    $hightlight = get_HightLight(16);
    $ipadAir = get_HightLight(4);
    $ipadPro = get_HightLight(5);
    $ipadMini = get_HightLight(6);
    
?>
  <!-- ipadAir -->
  <link rel="stylesheet" href="./assets/css/common.css">
  <div class="container padding-top">
    <h2 class="title">iPad Air</h2>
    <div class="row">
      <?php
        while($row = $ipadAir->fetch_array(MYSQLI_BOTH)) {
          $url = $row['url1'];
          $name = $row['name'];
          $id = $row['productId'];
          $des = $row['des'];
      ?>
      <div class="col-md-4">
        <a href=<?php echo "product.php?id=$id"; ?> class="card-link">
          <div class="card">
            <img src=<?php echo "$url"; ?> alt="hight light image" class="card-img-top" height="300px">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $name; ?>
              </h5>
              <p class="card-text">
                <?php echo $des; ?>
              </p>
              <br>
              <a style="width: 100%;" href=<?php echo "product.php?id=$id"; ?> class="btn btn-primary btn-card">Detail</a>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
    <a class="btn btn-primary more-button" href="product-list?id=4&page=1">See more</a>
  </div>
  <!-- End ipadAir -->

    <!-- ipadPro -->
  <div class="container">
    <h2 class="title">iPad Pro</h2>
    <div class="row">
      <?php
        while($row = $ipadPro->fetch_array(MYSQLI_BOTH)) {
          $url = $row['url1'];
          $name = $row['name'];
          $id = $row['productId'];
          $des = $row['des'];
      ?>
      <div class="col-md-4">
        <a href=<?php echo "product.php?id=$id"; ?> class="card-link">
          <div class="card">
            <img src=<?php echo "$url"; ?> alt="hight light image" class="card-img-top" height="300px">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $name; ?>
              </h5>
              <p class="card-text">
                <?php echo $des; ?>
              </p>
              <br>
              <a style="width: 100%;" href=<?php echo "product.php?id=$id"; ?> class="btn btn-primary btn-card">Detail</a>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
    <a class="btn btn-primary more-button" href="product-list?id=5&page=1">See more</a>
  </div>
  <!-- End ipadPro -->

  <!-- ipadMini -->
  <div class="container">
    <h2 class="title">iPad Mini</h2>
    <div class="row">
      <?php
        while($row = $ipadMini->fetch_array(MYSQLI_BOTH)) {
          $url = $row['url1'];
          $name = $row['name'];
          $id = $row['productId'];
          $des = $row['des'];
      ?>
      <div class="col-md-4">
        <a href=<?php echo "product.php?id=$id"; ?> class="card-link">
          <div class="card">
            <img src=<?php echo "$url"; ?> alt="hight light image" class="card-img-top" height="300px">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $name; ?>
              </h5>
              <p class="card-text">
                <?php echo $des; ?>
              </p>
              <br>
              <a style="width: 100%;" href=<?php echo "product.php?id=$id"; ?> class="btn btn-primary btn-card">Detail</a>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
    <a class="btn btn-primary more-button" href="product-list?id=6&page=1">See more</a>
  </div>
  <!-- End ipadMini -->

<?php
    include 'include/footer.php';
?>