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
            <a href="product.php?id=<?php echo $id ?>" style="text-decoration: none">
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
            </a>
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
    <hr style="width:50%; border-top: 1px solid #9e9e9e">
    <!-- End highlights -->
    <!-- macAir -->
    <div class="container">
    <?php } else { ?>
    <div class="container padding-top">
    <?php } ?>
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
  <hr style="width:50%; border-top: 1px solid #9e9e9e">
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
  <hr style="width:50%; border-top: 1px solid #9e9e9e">
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