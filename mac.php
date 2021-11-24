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

    $hightlight = get_HightLight(15);
    $macAir = get_HightLight(1);
    $macPro = get_HightLight(2);
    $iMac = get_HightLight(3);  
?>
  <!-- macAir -->
  <link rel="stylesheet" href="./assets/css/common.css">
  <div class="container padding-top">
    <h2 class="title">MacBook Air</h2>
    <div class="row">
      <?php
        while($row = $macAir->fetch_array(MYSQLI_BOTH)) {
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
              <a style="width: 100%;" href=<?php echo "product.php?id=$id"; ?> class="btn btn-primary btn-card">Detail</a>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
    <a class="btn btn-primary more-button" href="product-list?id=1&page=1">See more</a>
  </div>
  <!-- End macAir -->

    <!-- macPro -->
  <div class="container">
    <h2 class="title">MacBook Pro</h2>
    <div class="row">
      <?php
        while($row = $macPro->fetch_array(MYSQLI_BOTH)) {
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
              <a style="width: 100%;" href=<?php echo "product.php?id=$id"; ?> class="btn btn-primary btn-card">Detail</a>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
    <a class="btn btn-primary more-button" href="product-list?id=2&page=1">See more</a>
  </div>
  <!-- End macPro -->

  <!-- iMac -->
  <div class="container">
    <h2 class="title">iMac</h2>
    <div class="row">
      <?php
        while($row = $iMac->fetch_array(MYSQLI_BOTH)) {
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
              <a style="width: 100%;" href=<?php echo "product.php?id=$id"; ?> class="btn btn-primary btn-card">Detail</a>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
    <a class="btn btn-primary more-button" href="product-list?id=3&page=1">See more</a>
  </div>
  <!-- End iMac -->

<?php
    include 'include/footer.php';
?>