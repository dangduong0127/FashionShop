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
          </p>
        <div class="col-lg-4 col-md-12 footer-social">
          <a href="https://www.facebook.com/duykhanh021101"><i class="fa fa-facebook-official"></i></a>
          <a href="https://www.instagram.com/n.d.khanh02/?fbclid=IwAR05ERqeytGs_2roHsoAxNt-l2nyjtjRAC9WZp4EU6C767hWOwaftuUx9Hw"><i class="fa fa-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UC7hClxCjYxoUqI334g1Rs7Q"><i class="fa fa-youtube"></i></a>
          <a href="https://tinder.com"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://kit.fontawesome.com/98638255fc.js" crossorigin="anonymous"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/lightbox/simpleLightbox.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendors/counter-up/jquery.counterup.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/theme.js"></script>
  <style type="text/css">
    .cart_icon {
      position: fixed;
      z-index: 999;
      right: 20px;
      top: 88%;
      font-size: 45px;
      
    }
    .cart_icon > .cart_count{
      background-color: red;
      border-radius: 20px;
      height: 100%;
      width: 100%;
      font-size: 15px;
      color: white;
      padding-top: 3px;
      padding-bottom: 3px;
      padding-left: 6px;
      padding-right: 6px;
      position: relative;
      bottom: 30px;
      left: 60px;
      font-weight: bold;

    }
  </style>
  <?php 
  if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }
  $count = 0;
  foreach($_SESSION['cart'] as $item) {
    $count += $item['num'];
  }
  ?>
  <span class="cart_icon">
    <span class="cart_count"><?=$count?></span>
    <a href="cart.php" style="color:grey;"><i class="fa-regular fa-cart-shopping"></i></a>
  </span>
<script type="text/javascript">
  function addCart(productId, num){
    $.post('api/ajax_request.php', {
      'action':'cart',
      'id': productId,
      'num': num
    }, function(data){
      location.reload()
    })
  }
</script>
</body>
</html>