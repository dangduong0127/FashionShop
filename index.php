<?php
  require_once('layouts/header.php');
?>
  <!--================Home Banner Area =================-->
  <body>
  <style type="text/css">
   
.aspect-ratio-169{
  display: block;
  position: relative;
  padding-top: 38%;
  transition: 0.3s;
}
.aspect-ratio-169 img {
  display: block;
  position: absolute;
  width: 100%;
  height: auto%;
  top: 0;
  left: 0;
}

.dot-container{
  position: absolute;
  height: 30px;
  width: 100%;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
}
.dot {
  height: 15px;
  width: 15px;
  background-color: #ccc;
  border-radius: 50%;
  margin-right: 12px;
  cursor: pointer;
}
.dot.active {
  background-color: #333;
}
#slides {
  padding-bottom: 35px;
  overflow: hidden;
}



  </style>
  <div id="header"></div>
  <section id="slides">
    <div class="aspect-ratio-169">
      <img src="imgSlides/37f8b36e48f471db0580e659248b7d7b.jpg">
      <img src="imgSlides/052f5314764b4dae03d2ef35001ef2e1.jpg">
      <img src="imgSlides/14a22ce34593850324438dc8fd7d909c.jpg">
      <img src="imgSlides/c9cc4eaf5a7dfd790f93fa5a39bedf2b.jpg">
    </div>
    <div class="dot-container">
      <div class="dot active"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </section>

<script>
  const imgPosition = document.querySelectorAll(".aspect-ratio-169 img");
  const imgContainer = document.querySelector('.aspect-ratio-169');
  const dotItem = document.querySelectorAll(".dot");
  let index = 0;
  let imgNumber = imgPosition.length;
  imgPosition.forEach(function(image, index) {
    //console.log(image, index);
    image.style.left = index*100 + "%";
    dotItem[index].addEventListener("click",function(){
      slider(index);
    })
  }) 
  function imgSlide(){
    index++;
    if(index >= imgNumber){
      index=0;
    }
    slider(index);
    
  }
  function slider(index) {
    imgContainer.style.left = "-" +index*100+ "%";
    const dotActive = document.querySelector('.active');
    dotActive.classList.remove("active");
    dotItem[index].classList.add("active");
  }
  setInterval(imgSlide, 4000);
</script>
  <!--================End Home Banner Area =================-->

  <!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">
    <div class="container"style="margin-top: 20px">
      <div class="row">
        <div class="col-lg-3 col-md-6" >
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-money"></i>
              <h3>Chính sách hoàn tiền</h3>
            </a>
            <p>Hoàn tiền thuận tiện <br/> Không sợ mình thiệt</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-truck"></i>
              <h3>miễn phí vận chuyển</h3>
            </a>
            <p>Miễn phí giao hàng toàn quốc<br/>Giao hàng nhanh quốc tế</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-support"></i>
              <h3>hỗ trợ</h3>
            </a>
            <p>Hỗ trợ mọi lúc mọi nơi<br/>Đội ngũ nhân viên nhiệt tình</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-blockchain"></i>
              <h3>thanh toán</h3>
            </a>
            <p>Thanh toán dễ dàng<br/>Đa dạng hình thức thanh toán</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->

  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title"style="margin-top: -40px">
            <h2 ><span>Sản phẩm nổi bật</span></h2>
            <p>Sản phẩm được bán chạy nhất trong quý III</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="container">
          <div class="col-lg-5 col-6" style="display: flex;left: -160px;">
          <?php
          foreach($lastestItems as $item) {
            echo '<div class="single-product" style="margin-left: 20px;">
              <div class="product-img">
              <a href="detail.php?id='.$item['id'].'">
                <img src="'.$item['thumbnail'].'" style="width:255px; height: 382px"/>
                </a>
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="#" onclick="addCart('.$item['id'].', 1)">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="detail.php?id='.$item['id'].'" class="d-block">
                  <h4>'.$item['title'].'</h4>
                </a>
                <div class="mt-3">
                <del>'.number_format($item['price']).'</del>
                <br>
                  <span class="mr-4">'.number_format($item['discount']).' VNĐ</span>
                  
                </div>
              </div>
            </div>';
          }
          ?>
        </div>
        </div>
      </div>
  </section>
  <!--================ End Feature Product Area =================-->

  <!--================ Offer Area =================-->
  <section class="offer_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-4 col-lg-6 text-center">
          <div class="offer_content">
            <h3 class="text-uppercase mb-40">Thời trang nam/nữ</h3>
            <h2 class="text-uppercase">Giảm sốc 50%</h2>
            <a href="cart.html" class="main_btn mb-20 mt-5">Thêm vào giỏ hàng</a>
            <p>Thời gian có hạn</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Offer Area =================-->

  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    
          </div>
        </div>
      </div>
        <?php 
        foreach($menuItems as $item) {
          $sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.category_id = ".$item['id']." and Product.deleted = 0 order by Product.updated_at desc limit 0,4";
          $items = executeResult($sql);
          if($items == null || count($items) < 4) continue;
        ?>
        <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
        <h2 style=""><span><?=$item['name']?></span></h2>
        <p style="margin-bottom: 40px;">Những sản phẩm mới xuất hiện trong tháng 12 này</p>
        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row">
            <div class="col-lg-6 col-md-6" style="display: flex; justify-content: space-between;margin-left: -1rem;left: -80px;">
          <?php
          foreach($items as $pItem) {
            echo '<div class="single-product" style="margin-left: 15px;">
                <div class="product-img">
                <a href="detail.php?id='.$pItem['id'].'">
                  <img src="'.$pItem['thumbnail'].'" style="width:300px; height: 350px"/>
                  </a>
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#" onclick="addCart('.$pItem['id'].', 1)">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="detail.php?id='.$pItem['id'].'" class="d-block">
                    <h4>'.$pItem['title'].'</h4>
                  </a>
                  <div class="mt-3">
                  <del>'.number_format($pItem['price']).' VNĐ</del>
                  <br>
                    <span class="mr-4">'.number_format($pItem['discount']).' VNĐ</span>
                  </div>
                </div>
              </div>';
          }
          ?>
        </div>
        </div>
      </div>
      </div>
        </div>
      </div>
    </div>
        <?php 
        }
        ?>
        
              
            
          
  </section>
  <!--================ End New Product Area =================-->

  <?php
    require_once('layouts/footer.php');
  ?>
