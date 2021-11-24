
<?php
    include '../core/process.php';
    if(!checkAdmin()){
        header('Location: ../home');
    }
    include 'include/header.php';

    $hightlight = get_HightLight(0);
?>

<!-- highlights -->
<link rel="stylesheet" href="../assets/css/common.css">
<div class="container padding-top">
    <h2 class="title">Highlights</h2>
</div>
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
                <img class="d-block w-40" src=<?php echo $url ?> height="400" style="margin: auto;">
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

<?php
    include 'include/footer.php';
?>