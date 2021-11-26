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
<?php
        // array("Mac")
        for ($i = 15; $i <= 18; $i++) {
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
<?php if ($i != 18) { ?>
<hr style="width:50%; border-top: 1px solid #9e9e9e">
<?php } ?>
<p style="height: 50px;"></p>
<?php 
            }
        }
    ?>
<!-- end highlights -->

<?php
    include 'include/footer.php';
?>