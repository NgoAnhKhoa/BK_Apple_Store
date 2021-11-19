<?php
    include "./core/auth.php";
    if(checkLogin()){
      include "include/header.php";
    }
    else{
      include "include/header_notlogin.php";
    }
?>

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/assets/ph/p6_gro1/p6_initial_home/HOME_T_O_KV_Main_Animated_KV_1440X640.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="black">
                        KIẾN TẠO TƯƠNG LAI
                    </h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/assets/vn/home/2021/2021_Home_KV_NeoQLED_Perspective_PC.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="white">
                        KIẾN TẠO TƯƠNG LAI
                    </h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/assets/vn/home/2021/DA_Main-KV_Homepage_Desk_202103.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="white">
                        KIẾN TẠO TƯƠNG LAI
                    </h2>
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
</div>

<div class="container about-ctn">
    <div class="about-heading mb-5">
        <p>Công ty SAMSUNG VIETNAM</p>
        <h2>Công ty dẫn đầu thế giới trong lĩnh vực kinh doanh điện tử và công nghệ</h2>
    </div>

    <section class="about">
        <div class="row three-cards">
            <h3 class="d-block">Cam kết từ SAMSUNG </h3>
            <p class="text-justify">
                Samsung cam kết tuân thủ các quy định pháp luật của từng quốc gia. Đồng thời, áp dụng bộ quy tắc ứng xử
                chuẩn mực như một công cụ giúp doanh nghiệp dễ dàng thích ứng với những thay đổi nhanh chóng, phương
                tiện hữu hiệu kết nối và xây dựng lòng tin giữa các bên: khách hàng, cổ đông, nhân viên, đối tác kinh
                doanh và cộng đồng địa phương. Với mục tiêu trở thành một trong những doanh nghiệp có nền tảng đạo đức
                kinh doanh vững mạnh nhất, Samsung không ngừng đào tạo đội ngũ nhân viên dựa trên triết lý đang theo
                đuổi, vận hành một hệ thống giám sát và quản lý doanh nghiệp chặt chẽ, dựa trên tính công bằng và minh
                bạch.
            </p>
        </div>
        <div class="row three-cards">
            <h3>Tôn chỉ mục đích</h3>
            <p class="text-justify">
              Nền Tảng Quản Lý Cốt Lõi

              Dựa trên nguồn lực con người & công nghệ.
              Phát triển thông qua các nguyên tắc quản lý doanh nghiệp.
              Phát triển hiệu ứng cộng hưởng trong toàn bộ hệ thống quản lý.

            </p>
            <p class="text-justify">
              Mục Tiêu Doanh Nghiệp

              Tạo ra sản phẩm và dịch vụ tốt nhất
              Mang đến sự hài lòng tối đa cho khách hàng.
              Duy trì vị trí số một trong lĩnh vực và ngành công nghiệp.

            </p>
          <p class="text-justify">
            Mục Tiêu Xã Hội


            Phát triển cộng đồng
            Đóng góp cho nhu cầu chung của cộng đồng, nâng cao chất lượng cuộc sống.
            Thực hiện sứ mệnh đã cam kết với tư cách là một thành viên trong cộng đồng.


          </p>

        </div>

        <div class="row three-cards">
            <h3>Phạm vi hoạt động</h3>
            <p class="text-justify">
                Chi hội Đá quý thành phố Hồ Chí Minh hoạt động trên phạm vi tỉnh Hồ Chí Minh và một số tỉnh xung quanh,
                có trụ sở tại số nhà 15 Nguyễn Tuân, Phường 3, Quận Gò Vấp, Thành phố Hồ Chí Minh. Chi Hội có tư cách
                pháp nhân, có tài khoản riêng.
            </p>
            <p>
                Chi hội có thể thành lập chi nhánh hoặc văn phòng đại diện tại một số địa phương trong TP. HCM theo quy
                định của pháp luật.
            </p>
        </div>

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.8789509643088!2d106.70414382923056!3d10.771750416994221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4156ae62ad%3A0x411a671f3794c4fd!2sSamsung%20Vietnam!5e0!3m2!1svi!2s!4v1620196991103!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</div>

<?php
    include 'include/footer.php';
?>