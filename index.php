<!-- #                        
                         _oo0oo_
                        o8888888o
                        88" . "88
                        (| -_- |)
                        0\  =  /0
                      ___/`---'\___
                    .' \|     |// '.
                   / \|||  :  |||// \
                  / _||||| -:- |||||- \
                 |   | \\  -  /// |   |
                 | \_|  ''\---/''  |_/ |
                 \  .-\__  '-'  ___/-. /
               ___'. .'  /--.--\  `. .'___
            ."" '<  `.___\_<|>_/___.' >' "".
           | | :  `- \`.;`\ _ /`;.`/ - ` : | |
           \  \ `_.   \_ __\ /__ _/   .-` /  /
       =====`-.____`.___ \_____/___.-`___.-'=====


        Nam mô Hương Cúng Dường Bồ-tát Ma-ha-tát.
        Nam mô Hương Cúng Dường Bồ-tát Ma-ha-tát.
        Nam mô Hương Cúng Dường Bồ-tát Ma-ha-tát.
        Đức Phật nơi đây phò hộ code không BUG. 
        Nam mô a di đà Phật.
-->
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
?>

<!-- highlight -->
<link rel="stylesheet" href="./assets/css/common.css">
<div class="container padding-top">
    <h2 class="title">Highlights</h2>
</div>
<!-- <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/assets/ph/p6_gro1/p6_initial_home/HOME_T_O_KV_Main_Animated_KV_1440X640.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="black">
                        Galaxy S21|S21+ 5G
                    </h2>
                    <a href="product.php?id=3" class="btn btn-carousel-dark">Detail</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/assets/vn/home/2021/2021_Home_KV_NeoQLED_Perspective_PC.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="white">
                        Neo QLED
                    </h2>
                    <a href="product.php?id=25" class="btn btn-carousel-dark">Detail</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/assets/vn/home/2021/DA_Main-KV_Homepage_Desk_202103.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="white">
                        Samsung AI
                    </h2>
                    <a href="product.php?id=53" class="btn btn-carousel-light">Detail</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div> -->
<?php
        // array("Mac")
        for ($i = 15; $i <= 18; $i++) {
            $type = 
            $hightlight = get_HightLight($i);
            if ($hightlight->num_rows != 0) {
    ?>
<div class="container">
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
                <img class="d-block w-50" src=<?php echo $url ?> height="500" style="margin: auto;">
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
<p style="height: 50px;"></p>
<?php 
            }
        }
    ?>
<!-- end highlights -->

<!-- Category -->

<div class="container">
    <h2 class="title">Highlights</h2>
    <?php
        // array("Mac")
        for ($i = 15; $i <= 18; $i++) {
            $type = 
            $hightlight = get_HightLight($i);
            if ($hightlight->num_rows != 0) {
    ?>
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
    <?php 
            }
        }
    ?>
  </div>

<!-- end category -->

<?php
    include 'include/footer.php';
?>