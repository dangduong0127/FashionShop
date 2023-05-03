<?php
  require_once('layouts/header.php');
  $category_id = getGet('id');

  if($category_id == null || $category_id == '') {
    $sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id and Product.deleted = 0 order by Product.updated_at desc limit 0,20";
  } else {
    $sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.category_id = $category_id and Product.deleted = 0 order by Product.updated_at desc limit 0,20";
  }
  $lastestItems = executeResult($sql);
?>

 
    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Sản phẩm </h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.php">Trang Chủ</a>
              <a href="category.php">Cửa Hàng</a>
              <a href="category.php">Sản Phẩm</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <div class="left_dorp">
                <select class="sorting">
                  <option value="1">Tất cả</option>
                  <option value="2">A - Z</option>
                  <option value="4">Giá</option>
                </select>
                <select class="show">
                  <option value="1">Show 12</option>
                  <option value="2">Show 14</option>
                  <option value="4">Show 16</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row" >
                

                <?php
                foreach($lastestItems as $item){
                  echo'
                    <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img" style="width: 100%; height: 350px;">
                    <a href="detail.php?id='.$item['id'].'">
                      <img
                        class="card-img"
                        src="'.$item['thumbnail'].'"
                        alt=""
                      />
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
                        <span class="mr-4">'.number_format($item['discount']).' VNĐ</span>
                        <del>'.number_format($item['price']).' VNĐ</del>
                      </div>
                    </div>
                  </div>
                </div>
                  ';
                }
                ?>

                
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Danh mục sản phẩm</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Quần</a>
                    </li>
                    <li>
                      <a href="#">Áo</a>
                    </li>
                    <li>
                      <a href="#">Giầy</a>
                    </li>
                    <li>
                      <a href="#">Dép</a>
                    </li>
                    <li>
                      <a href="#">Mũ nón</a>
                    </li>
                    <li>
                      <a href="#">Đồng hồ</a>
                    </li>
                    <li>
                      <a href="#">Trang sức</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Thương hiệu</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Dior</a>
                    </li>
                    <li>
                      <a href="#">Louis Vuitton</a>
                    </li>
                    <li class="active">
                      <a href="#">Chanel</a>
                    </li>
                    <li>
                      <a href="#">Gucci</a>
                    </li>
                    <li>
                      <a href="#">Biluxury</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Color Filter</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Black</a>
                    </li>
                    <li>
                      <a href="#">Black Leather</a>
                    </li>
                    <li class="active">
                      <a href="#">Black with red</a>
                    </li>
                    <li>
                      <a href="#">Gold</a>
                    </li>
                    <li>
                      <a href="#">Spacegrey</a>
                    </li>
                  </ul>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->

  <?php
    require_once('layouts/footer.php');
  ?>
