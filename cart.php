<?php
    
    include './core/process.php';
    if(checkLogin()){
        if(checkAdmin()) {
          header('Location: admin/home');
        }
        else {
          include "include/header.php";   
        }
             
    }
    else{
        header("Location: login");
    }
?>
<link rel="stylesheet" href="./assets/css/common.css">
<link rel="stylesheet" href="./assets/css/toast.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<div class="container mb-4 padding-top">
    <h2 class="title">My cart</h2>
    <button class="btn btn-block" onclick="showErrorToast();">Bấm vô đây</button>
    <div id="toast"></div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive" id="cart-table">
              
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <form action="./payment/paymomo/init_payment.php" method="POST">
                        <input hidden type="text" name="amount" id="amount">
                        <button class="btn btn-lg btn-block btn-success text-uppercase" id="checkout">Thanh toan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function showErrorToast() {
    toast({
        title: "Thất bại!",
        message: "Cần phải đăng nhập mới thanh toán được",
        type: "error",
        duration: 5000
    });
}
$(document).ready(() => {
    $('#cart-table').load('cart_content.php');
    $("#checkout").click(() => {
        if ($("#amount").val() == 0) {
            $('#checkout').click(showErrorToast);
        }
    });
});
</script>
<script src="./assets/js/toast.js"></script>
<?php
    include 'include/footer.php';
?>