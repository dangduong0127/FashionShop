<?php
	require_once('layouts/header.php');
	
	$totalMoney = 0;
      foreach($_SESSION['cart'] as $item) {
            $totalMoney += $item['discount'] * $item['num'];
      }
?>

<!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Thanh toán</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Trang Chủ</a>
              <a href="checkout.html">Thanh toán</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
      <div class="container">
        <div class="returning_customer">
          <div class="check_title">
            <h2>
             bạn chưa đăng nhập?
              <a href="admin/authen/login.php">Đăng nhập tại đây</a>
            </h2>
          </div>
          <p>
            Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin chi tiết của bạn vào ô bên dưới. Nếu bạn là khách hàng mới, vui lòng chuyển đến phần Thanh toán & Giao hàng.
          </p>
          <form
            class="row contact_form"
            action="#"
            method="post"
            novalidate="novalidate"
          >
            <div class="col-md-6 form-group p_star">
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value=" "
              />
              <span
                class="placeholder"
                data-placeholder="Tên tài khoản hoặc Email"
              ></span>
            </div>
            <div class="col-md-6 form-group p_star">
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                value=""
              /><span class="placeholder" data-placeholder="Mật khẩu"></span>
            </div>
            <div class="col-md-12 form-group">
              <button type="submit" value="submit" class="btn submit_btn">
                Gửi
              </button>
              <div class="creat_account">
                <input type="checkbox" id="f-option" name="selector" />
                <label for="f-option">Nhớ mật khẩu</label>
              </div>
              <a class="lost_pass" href="#">Bạn đã quên mật khẩu?</a>
            </div>
          </form>
        </div>
        <div class="cupon_area">
          <div class="check_title">
            <h2>
              Bạn có phiếu giảm giá
              <a href="#"></a>
            </h2>
          </div>
          <input type="text" placeholder="Nhập phiếu giảm giá vào đây" />
          <a class="tp_btn" href="#">Áp dụng</a>
        </div>
        <div class="billing_details">
          <div class="row">
          	<form
                class="row contact_form"
                action="#"
                method="post"
                novalidate="novalidate"
                onsubmit="return completeCheckout();"
              >
            <div class="col-lg-5">
              <h3>Chi tiết thanh toán</h3>
              
                
                
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="company"
                    name="fullname"
                    placeholder="Lò và Name"
                  />
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                  	required="true"
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Phone number"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Email Address"
                  ></span>
                </div>
                <!--<div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">Hải Phòng</option>
                    <option value="2">Hà Nội</option>
                    <option value="4">Hồ Chí Minh</option>
                  </select>
                </div>-->
                <div class="col-md-12 form-group p_star">
                  <input
                  	required="true"
                    type="text"
                    class="form-control"
                    id="address"
                    name="address"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Address"
                  ></span>
                </div>
              
                <div class="col-md-12 form-group">
                  <textarea
                    class="form-control"
                    name="note"
                    id="message"
                    rows="1"
                    placeholder="Nội dung ghi chú"
                  ></textarea>
                </div>
              
            </div>
            <div class="col-lg-7">
              <div class="order_box">
                <h2>Đơn hàng của bạn</h2>
                <ul class="list">
                  <li>
                    <a href="#"
                      >Sản phẩm
                      <span>Tổng</span>
                    </a>
                  </li>
                <?php
                if(!isset($_SESSION['cart'])) {
            				$_SESSION['cart'] = [];
            			}$index = 0;
            			foreach($_SESSION['cart'] as $item) {
            				echo'
    					
                  <li>
                    <a href="#"
                      >'.$item['title'].'
                      <span class="middle">x'.$item['num'].'</span>
                      <span class="last">'.number_format($item['discount'] * $item['num']).' VNĐ</span>
                    </a>
                  </li>
                
    				';
    			}
                ?>
                </ul>
                <ul class="list list_2">
                  
                  <li>
                    <a href="#"
                      >Tổng
                      <span><?=number_format($totalMoney)?> VNĐ</span>
                    </a>
                  </li>
                </ul>
                
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" />
                  <label for="f-option4">Tôi đã đọc và chấp nhận </label>
                  <a href="#">Các điều khoản & điều kiện*</a>
                </div>
                <a href="checkout.php"><button class="btn btn-success" style="font-size: 25px; width: 100%">Thanh toán</button></a>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->
<script type="text/javascript">
	function completeCheckout() {
		$.post('api/ajax_request.php', {
			'action': 'checkout',
			'fullname': $('[name=fullname]').val(),
			'email': $('[name=email]').val(),
			'phone_number': $('[name=phone]').val(),
			'address': $('[name=address]').val(),
			'note': $('[name=note]').val()
		}, function(){
			window.open('complete.php', '_self')
		})

		return false;
	}
</script>
<?php
	require_once('layouts/footer.php');
?>