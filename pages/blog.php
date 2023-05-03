<?php
require "post.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Logo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../vendors/linericon/style.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="../vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="../vendors/jquery-ui/jquery-ui.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/responsive.css" />
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="float-left">
                            <p>phone: 0347611586</p>
                            <p>email: info@eiser.com</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="float-right">
                            <ul class="right_side">
                                <li>
                                    <a href="cart.html"> gift card </a>
                                </li>
                                <li>
                                    <a href="tracking.html"> Giao Hàng </a>
                                </li>
                                <li>
                                    <a href="http://localhost:8080/shop/page/contact.php"> Liên Hệ </a>
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
                    <a class="navbar-brand logo_h" href="index.html">
                        <img src="img/logo.png" alt="" style="width: 50%" ; />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                        <div class="row w-100 mr-0">
                            <div class="col-lg-7 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Trang chủ</a>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Cửa Hàng</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="category.html">Sản Phẩm</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="single-product.html">Chi Tiết Sản Phẩm</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="checkout.html">Thanh Toán</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="cart.html">Giỏ Hàng</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Bài viết</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="blog.html">Bài viết</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="single-blog.html">Chi tiết bài viết</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">Trang</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="tracking.html">Theo dõi đơn giàng</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="elements.html">Elements</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost:8080/shop/page/contact.php">Liên
                                            hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-5 pr-0">
                                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                    <li class="nav-item">
                                        <a href="#" class="icons">
                                            <i class="ti-search" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="icons">
                                            <i class="ti-shopping-cart"></i>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="login.html" class="icons">
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

    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>Bài Viết</h2>
                        <p>Make your life with new fashion style</p>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Trang Chủ</a>
                        <a href="blog.html">Bài Viết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">



                        <div>

                            <?php
                            $listNews = listNews();
                            while ($row_tinmoinhat_one = mysqli_fetch_array($listNews)) {
                            ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="<?php echo $row_tinmoinhat_one['linkImage'] ?>"
                                        alt="" />

                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="newsDetail.php">
                                        <h2>
                                            <?php echo $row_tinmoinhat_one['title'] ?>
                                        </h2>
                                    </a>
                                    <p>
                                        <?php echo $row_tinmoinhat_one['summer'] ?>
                                    </p>
                                    <ul class="blog-info-link">
                                        <li>
                                            <a href="#"><i class="ti-user"></i>
                                                <?php echo $row_tinmoinhat_one['author'] ?>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </article>
                            <?php
                            }
                            ?>
                        </div>









                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="ti-arrow-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="ti-arrow-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm" />
                                        <div class="input-group-append">
                                            <button class="btn" type="button">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button class="main_btn rounded-0 w-100" type="submit">
                                    Tìm kiếm
                                </button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Bài viết gần đây</h3>
                            <?php
                            $listNews = listNews();
                            while ($row_tinmoinhat_one = mysqli_fetch_array($listNews)) {
                            ?>
                            <div class="media post_item">
                                <img style="max-height: 60px;" src="<?php echo $row_tinmoinhat_one['linkImage'] ?>"
                                    alt="" />
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3><?php echo $row_tinmoinhat_one['title'] ?></h3>
                                    </a>
                                    <p><?php echo $row_tinmoinhat_one['author'] ?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </aside>


                        <!--<aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside> -->



                        <!-- <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email" required />
                                </div>
                                <button class="main_btn rounded-0 w-100" type="submit">
                                    Subscribe
                                </button>
                            </form>
                        </aside> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Sản phẩm hàng đầu</h4>
                    <ul>
                        <li>
                            <a href="https://canifa.com/blog/cac-thuong-hieu-thoi-trang-noi-tieng-the-gioi/">Sản phẩm
                                bán chạy</a>
                        </li>
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
                    <p>
                        Hãy tin tưởng dịch vụ của chúng tôi, Chúng tôi có
                        nhiều ưu đãi và hơn thế nữa...
                    </p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Địa chỉ Email của bạn"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email" />
                            <button class="click-btn btn btn-default">
                                Đăng kí
                            </button>
                            <div style="position: absolute; left: -5000px">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                    type="text" />
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
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 footer-social">
                    <a href="https://www.facebook.com/duykhanh021101"><i class="fa fa-facebook"></i></a>
                    <a
                        href="https://www.instagram.com/n.d.khanh02/?fbclid=IwAR05ERqeytGs_2roHsoAxNt-l2nyjtjRAC9WZp4EU6C767hWOwaftuUx9Hw"><i
                            class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UC7hClxCjYxoUqI334g1Rs7Q"><i class="fa fa-youtube"></i></a>
                    <a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->

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
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>