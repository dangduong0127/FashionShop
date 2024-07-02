<?php
  require("./layouts/header.php")
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Logo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
  </head>

  <body>
    <!--================Header Menu Area =================-->
    <header id="header"></header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Liên hệ với chúng tôi</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Trang chủ</a>
              <a href="contact.html">Liên hệ</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7467.414434637901!2d106.6949951149665!3d20.837684427457734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a9c2ee478df%3A0x6039ffe1614ede5c!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIw6BuZyBo4bqjaSBWaeG7h3QgTmFt!5e1!3m2!1svi!2s!4v1666061712680!5m2!1svi!2s" width=100% height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>>
        
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Liên hệ</h2>
        </div>
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Nhập nội dung"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Nhập tên của bạn">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Nhập địa chỉ email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Góp ý">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn">Gửi</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>284 Lạch Tray, Lê Chân, Hải Phòng</h3>
              <p>Trường Đại Học Hàng Hải Việt Nam</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:0347611586">0705585612</a></h3>
              <p>Từ 8:00 đến 18:00 các ngày trong tuần </p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:dangduong0127@gmail.com">dangduong0127@gmail.com</a></h3>
              <p>Gửi mail cho chúng tôi!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

<!--================ start footer Area  =================-->
<footer class="footer-area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Sản phẩm hàng đầu</h4>
        <ul>
          <li><a href="https://canifa.com/blog/cac-thuong-hieu-thoi-trang-noi-tieng-the-gioi/">Sản phẩm bán chạy</a></li>
          <li><a href="#">Thương hiệu nổi tiếng</a></li>
          <li><a href="#">Dịch vụ mua sắm</a></li>
          <li><a href="#">Quà tặng sản phẩm</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Cửa hàng</h4>
        <ul>
          <li><a href="#">Chi nhánh</a></li>
          <li><a href="#">Nhân viên</a></li>
          <li><a href="#">Các quy tắc</a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Liên hệ</h4>
        <ul>
          <li><a href="#">Liên hệ với chúng tôi</a></li>
          <li><a href="#">Câu hỏi thường gặp</a></li>
          <li><a href="#">Chăm sóc khách hàng</a></li>
          <li><a href="#">Quy tắc ứng xử</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Dịch vụ</h4>
        <ul>
          <li><a href="#">Dịch vụ vận chuyển</a></li>
          <li><a href="#">Dịch vụ đổi trả</a></li>
          <li><a href="#">Dịch vụ thanh toán</a></li>
          <li><a href="#">Tri ân khách hàng</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 single-footer-widget">
        <h4>Bảng tin</h4>
        <p>Hãy tin tưởng dịch vụ của chúng tôi, Chúng tôi có nhiều ưu đãi và hơn thế nữa...</p>
        <div class="form-wrap" id="mc_embed_signup">
          <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
            method="get" class="form-inline">
            <input class="form-control" name="EMAIL" placeholder="Địa chỉ Email của bạn" onfocus="this.placeholder = ''"
              onblur="this.placeholder = 'Your Email Address '" required="" type="email">
            <button class="click-btn btn btn-default">Đăng kí</button>
            <div style="position: absolute; left: -5000px;">
              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
            </div>

            <div class="info"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="footer-bottom row align-items-center">
      <p class="footer-text m-0 col-lg-8 col-md-12">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

<!--
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      <div class="col-lg-4 col-md-12 footer-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
      </div>
    </div>
  </div>
</footer>
<!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <!-- contact js -->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>