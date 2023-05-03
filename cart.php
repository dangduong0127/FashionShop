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
              <h2>Giỏ hàng</h2>
              <p>Tất cả sản phẩm bạn lựa chọn đều có ở đây !</p>
            </div>
            <div class="page_link">
              <a href="index.html">Trang chủ</a>
              <a href="cart.html">Giỏ hàng</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->
    
    <?php 
      $user = getUserToken();
      $userId = 0;
      if($user != null){
      $userId = $user['id'];
        $CheckoutLogin = 'checkout.php';
      } else {
        $CheckoutLogin = 'admin/authen/login.php';
        echo'<h1 style="text-align: center; margin-top: 15px; font-weight: bold;color: red">Vui lòng đăng nhập để tiếp tục tiến hành thanh toán!!!</h1>
        <p style="text-align: center;"><a href="admin/authen/login.php">Bạn chưa có tài khoản?</a></p>
        ';
      }
      
      function alert() {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    ?>

    <!--================Cart Area =================-->
    <section class="cart_area">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Giá thành</th>
                  <th scope="col">Số lượng</th>
                  <th scope="col">Tổng</th>
                </tr>
              </thead>
              <tbody>
              	  <?php 
    if(!isset($_SESSION['cart'])) {
    	$_SESSION['cart'] = [];
    }
    $index = 0;
    foreach($_SESSION['cart'] as $item) {
    	echo'
    		<tr>		
    				  
	                  <td>
	                    <div class="media">
	                      <div class="d-flex">
	                        <img
	                          src="'.$item['thumbnail'].'" style="height:80px"
	                        />
	                      </div>
	                      <div class="media-body">
	                        <p>'.$item['title'].'</p>
	                      </div>
	                    </div>
	                  </td>
	                  <td>
	                    <h5>'.number_format($item['discount']).' VNĐ</h5>
	                  </td>
	                  <td>
	                    <div class="product_count">
	                      <input
	                        type="text"
	                        name="num"
	                        id="num_'.$item['id'].'"
	                        maxlength="12"
	                        value="'.$item['num'].'"
	                        title="Quantity:"
	                        class="input-text qty"
	                        onchange="fixCartNum('.$item['id'].')"
	                      />
	                      <button
	                        onclick="increaseCart('.$item['id'].',1)"
	                        class="increase items-count"
	                        type="button"
	                      >
	                        <i class="lnr lnr-chevron-up"></i>
	                      </button>
	                      <button
	                        onclick="increaseCart('.$item['id'].',-1)"
	                        class="reduced items-count"
	                        type="button"
	                      >
	                        <i class="lnr lnr-chevron-down"></i>
	                      </button>
	                    </div>
	                  </td>
	                  <td>
	                    <h5>'.number_format($item['discount'] * $item['num']).' VNĐ</h5>
	                    <th><button class="btn btn-danger" style="margin-top: 50px; margin-left: 20px;" onclick="updateCart('.$item['id'].', 0)">Xoá</button></th>
	                  </td>
	                </tr>
    	';
    }
    ?>


                
                
                <tr class="bottom_button">
                  <td>
                    <a class="gray_btn" href="#">cập nhật giỏ hàng</a>
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="cupon_text">
                      <input type="text" placeholder="Phiếu giảm giá" />
                      <a class="main_btn" href="#">Áp dụng</a>
                      <a class="gray_btn" href="#">Không có</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h3 style="margin-left: -50px">Tổng: </h3>
                  </td>
                  <td>
                    <h3 style="margin-left: -120px;"><?=number_format($totalMoney)?> VNĐ</h3>
                  </td>
                </tr>
                
                <tr class="out_button_area">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="checkout_btn_inner">
                      <a class="gray_btn" href="index.php">Tiếp tục mua sắm</a>
                      <a class="main_btn" href="<?=$CheckoutLogin?>" >Thanh toán</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================--> 
<script type="text/javascript">
  function increaseCart(id, delta){
    num = parseInt($('#num_' + id).val())
    num += delta
    if(num < 1) num = 1
    $('#num_' + id).val(num)

	updateCart(id, num)
  }

  function fixCartNum(id){
    $('#num_' + id).val(Math.abs($('#num_' + id).val()))
    updateCart(id, $('#num_' + id).val())
  }

  function updateCart(productId, num){
    $.post('api/ajax_request.php', {
      'action':'update_cart',
      'id': productId,
      'num': num
    }, function(data){
      location.reload()
    })
  }
</script>
<?php
	require_once('layouts/footer.php');
?>