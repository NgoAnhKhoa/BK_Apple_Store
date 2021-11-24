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

    $hightlight = get_HightLight(17);
    $iphone13 = get_HightLight(7);
    $iphone12 = get_HightLight(8);
    $iphone11 = get_HightLight(9);
    
?>
  <!-- iphone13 -->
  <link rel="stylesheet" href="./assets/css/common.css">
  <!-- highlights -->
  <?php if ($hightlight->num_rows != 0) { ?>
  <div class="container padding-top">
      <h2 class="title">Highlights</h2>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $idx = -1;
            while($row = $hightlight->fetch_array(MYSQLI_BOTH)) {
              $url = $row['url1'];
              $name = $row['name'];
              $id = $row['productId'];
              $des = $row['des'];
              $idx++;
            ?>
            <div class="carousel-item <?php echo ($idx == 0)? "active": ""; ?>">
                <img class="d-block w-30" src=<?php echo $url ?> height="300" style="margin: auto;">
                <p style="height: 150px;"></p>
                <div class="carousel-caption d-none d-md-block" style="text-align: center;">
                    <h2 class="black">
                        <?php echo $name ?>
                    </h2>
                    <a href="product.php?id=<?php echo $id ?>" class="btn btn-carousel-dark" style="width: 30%;">Detail</a>
                </div>
            </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <!-- End highlights -->
    <!-- macAir -->
    <div class="container">
    <?php } else { ?>
    <div class="container padding-top">
    <?php } ?>
    <h2 class="title">iPhone 13</h2>
    <div class="row">
      <?php
        while($row = $iphone13->fetch_array(MYSQLI_BOTH)) {
          $url = $row['url1'];
          $name = $row['name'];
          $id = $row['productId'];
          $des = $row['des'];
      ?>
      <div class="col-md-4">
        <a href=<?php echo "product.php?id=$id"; ?> class="card-link">
          <div class="card">
            <img src=<?php echo "$url"; ?> alt="hight light image" class="card-img-top" height="350px">
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
    <a class="btn btn-primary more-button" href="product-list?id=7&page=1">See more</a>
  </div>
  <!-- End iphone13 -->

    <!-- iphone12 -->
  <div class="container">
    <h2 class="title">iPhone 12</h2>
    <div class="row">
      <?php
        while($row = $iphone12->fetch_array(MYSQLI_BOTH)) {
          $url = $row['url1'];
          $name = $row['name'];
          $id = $row['productId'];
          $des = $row['des'];
      ?>
      <div class="col-md-4">
        <a href=<?php echo "product.php?id=$id"; ?> class="card-link">
          <div class="card">
            <img src=<?php echo "$url"; ?> alt="hight light image" class="card-img-top" height="350px">
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
    <a class="btn btn-primary more-button" href="product-list?id=8&page=1">See more</a>
  </div>
  <!-- End iphone12 -->

  <!-- iphone11 -->
  <div class="container">
    <h2 class="title">iPhone 11</h2>
    <div class="row">
      <?php
        while($row = $iphone11->fetch_array(MYSQLI_BOTH)) {
          $url = $row['url1'];
          $name = $row['name'];
          $id = $row['productId'];
          $des = $row['des'];
      ?>
      <div class="col-md-4">
        <a href=<?php echo "product.php?id=$id"; ?> class="card-link">
          <div class="card">
            <img src=<?php echo "$url"; ?> alt="hight light image" class="card-img-top" height="350px">
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
    <a class="btn btn-primary more-button" href="product-list?id=9&page=1">See more</a>
  </div>
  <!-- End iphone11 -->

<?php
    include 'include/footer.php';
?>