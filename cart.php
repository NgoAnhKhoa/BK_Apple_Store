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

<h2 class="title">Giỏ hàng</h2>

<div class="container mb-4">
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
$(document).ready(() => {
    $('#cart-table').load('cart_content.php');
    $("#checkout").click(() => {
        if ($("#amount").val() == 0) {
            alert("Please choose a product to checkout");
        }
    });
});
</script>

<?php
    include 'include/footer.php';
?>