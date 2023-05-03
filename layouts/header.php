<?php
      session_start();
    require_once('utils/utility.php');
    require_once('database/dbhelper.php');

    $sql = "select * from Category";
    $menuItems = executeResult($sql);

    $sql = "select Product.*, Category.name as category_name from Product left join Category on Product.category_id = Category.id where Product.deleted = 0 order by Product.updated_at desc limit 0,5";
    $lastestItems = executeResult($sql);

    $urlRole = './admin/authen/login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Fashion Shop</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
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
  <header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: +84 0988 0908</p>
              <p>email: fashionshop@yahoo.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              <ul class="right_side">
                <li>
                  <a href="cart.html">
                    gift card
                  </a>
                </li>
                <li>
                  <a href="tracking.html">
                    Giao Hàng
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Liên Hệ
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.php">
            <img src="img/logo.png" alt="" style="width:50%"; />
          </a>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-200 mr-0" style="height:80px!important;">
              <div class="col-lg-10 pr-0">
                <ul class="nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ</a>
                  </li> 
                  <?php 
                      foreach($menuItems as $item){
                        echo '<li class="nav-item">
                                <a class="nav-link" href="category.php?id='.$item['id'].'">'.$item['name'].'</a>
                              </li>';
                      }
                    ?>
                  <li class="nav-item">
                    <a class="nav-link" href="single-blog.html">Bài Viết</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Liên hệ</a>
                  </li>
              </div>

              <div class="col-lg-0 pr-0" style="left: 690px !important; bottom: 80px;position: relative;">
                <ul class="navbar-nav  right_nav pull-right">
                  <li class="nav-item">
                    <a href="category.php" class="icons">
                      <i class="ti-search" aria-hidden="true"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="cart.php" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="<?=$urlRole?>" class="icons">
                      <i class="ti-user" aria-hidden="true"></i>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-heart" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->