<?php
    include "./core/process.php";
    if(checkLogin()){
      if(checkAdmin()) {
        header('Location: admin/home');
      }
      else {
        include "include/header.php";   
      }
           
    }
    else{
      include "include/header_notlogin.php";
    }

?>

<div class="container">
    <div class="row contact">
      <div class="col-md-4 contact-card">
        <div class="title-card-contact">
          Gọi điện thoại
        </div>
        <div class="des-card-contact">
          <p class="des-card-contact-content">
            Hỗ trợ sản phẩm và dịch vụ Samsung <br>
            1800 588 889 (tất cả sản phẩm) <br>
            1800 588 855 (thiết bị di động)
          </p>
          <p class="des-card-contact-content">
            Giờ làm việc:
            24 giờ, 7 ngày trong tuần. Miễn cước phí
          </p>
        </div>
        <div class="info-card-contact">
          <a href="#" class="btn btn-dark">1800 588 889 (tất cả sản phẩm)</a>
          <a href="#" class="btn btn-dark">1800 588 855 (thiết bị di động)</a>
        </div>
      </div>
      <div class="col-md-4 contact-card">
        <div class="title-card-contact">Trung Tâm Bảo Hành</div>
        
        <div class="des-card-contact">
          Tìm kiếm Trung Tâm Bảo Hành gần bạn nhất
        </div>
        <div class="info-card-contact" style="margin-top: 100px;">
          <a href="#" class="btn btn-dark">Tìm trung tâm bảo hành</a>
          <a href="#" class="btn btn-dark">Giao nhận tận nơi (Điện thoại)</a>
        </div>
      </div>
      <div class="col-md-4 contact-card">
        <div class="title-card-contact">Dành Cho Khách Hàng Doanh Nghiệp</div>
        <div class="des-card-contact">
          <p class="des-card-contact-content">
            1800-588-890 (dành cho khách hàng doanh nghiệp)
          </p>
          <p class="des-card-contact-content">
            Giờ làm việc:
            24 giờ, 7 ngày trong tuần. Miễn cước phí
          </p>
        </div>
        <div class="info-card-contact">
          <a href="#" class="btn btn-dark">1800 588 890</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="title">Liên hệ</h2>
        </div>
        <div class="col-md-7 mb-5 site-animate">
                <!-- <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <input  type="text" class="form-control" id="name" placeholder="Tên">
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email">
                </div> -->
              <?php if(checkLogin()) { ?>
              <div id="form-message">
                <div class="form-group">
                    <label for="message" class="sr-only">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                              placeholder="Viết tin nhắn của bạn"></textarea>
                    
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-lg" id="send-message">Gửi tin nhắn</button>
                </div>
              </div>
              <div class="thankyou" id="thankyou">Thank you for you message!</div>
              <?php } ?>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 site-animate">
            <!-- <p><img src="~/Assets/img/hcmut.jpg" alt="" class="img-fluid"></p> -->
            <p class="text-black">
                Address: <br> Số 2, đường Hải Triều, Phường Bến Nghé, Quận 1 <br> Tp Hồ Chí Minh, Việt Nam <br> <br>
                Phone: <br> +84-2839157310 <br> <br>
                <a href="https://www.facebook.com/SamsungVietnam" class="link">
                  <i class="fa fa-facebook social"></i>
                </a>
                <a href="https://www.facebook.com/SamsungVietnam" class="link">
                  <i class="fa fa-youtube social"></i>
                </a>
                <a href="https://www.facebook.com/SamsungVietnam" class="link">
                  <i class="fa fa-instagram social"></i>
                </a>
            </p>
        </div>
    </div>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.8789509643088!2d106.70414382923056!3d10.771750416994221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4156ae62ad%3A0x411a671f3794c4fd!2sSamsung%20Vietnam!5e0!3m2!1svi!2s!4v1620196991103!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>


<script src="assets/js/product.js"></script>

<?php
    include 'include/footer.php';
?>