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
<div class="container mb-4 padding-top">
    <h2 class="title">My cart</h2>
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
                        <button class="btn btn-lg btn-block btn-success text-uppercase" id="checkout">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(() => {
    $('#cart-table').load('cart_content.php');
    $("#checkout").click(() => {
        if ($("#amount").val() == 0) {
            showToast("Checkout Failed !", "Please choose product to checkout", "error", 3000);
        }
    });
});
</script>
<?php
    include 'include/footer.php';
?>