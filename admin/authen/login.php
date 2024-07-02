<?php
    session_start();
    require_once('../../utils/utility.php');
    require_once('../../database/dbhelper.php');
    require_once('process_form_register.php');
    require_once('process_form_login.php');

    $user = getUserToken();
    if($user != null && $user['role_id'] == 1) {
        header('Location: ../');
        die();
    }
    else if($user != null && $user['role_id'] == 2){
        header('Location: ../clients/');
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Login & Register</title>
  
<link rel="stylesheet" href="../../css/bootstrap.css" />
<link rel="stylesheet" href="../../vendors/linericon/style.css" />
<link rel="stylesheet" href="../../css/font-awesome.min.css" />
<link rel="stylesheet" href="../../css/themify-icons.css" />
<link rel="stylesheet" href="../../css/flaticon.css" />
<link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="../../vendors/lightbox/simpleLightbox.css" />
<link rel="stylesheet" href="../../vendors/nice-select/css/nice-select.css" />
<link rel="stylesheet" href="../../vendors/animate-css/animate.css" />
<link rel="stylesheet" href="../../vendors/jquery-ui/jquery-ui.css" /> 
<!-- main css -->
<link rel="stylesheet" href="../../css/style.css" />
<link rel="stylesheet" href="../../css/responsive.css" />
<link rel="stylesheet" href="../../css/login.css" />

<div class="dust-paarticle">
    
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post" onsubmit="return validateForm();">
                <h1>Tạo tài khoản</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                
                <span></span>
                <input required="true" id="fullname" name="fullname" type="text" placeholder="Lò và name" value="<?=$fullname?>"/>
                <input required="true" id="email" name="email" type="email" placeholder="Email" value="<?=$email?>"/>
                <input required="true" id="pwd" name="password" type="password" placeholder="Mật Khẩu" minlength="6" />
                <input required="true" id="confirmation_pwd" type="password" placeholder="Nhập lại mật khẩu" minlength="6" />
                <button>Đăng kí</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="post">
                <h1>Đăng nhập</h1>

                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <h4 style="color: red;" class="text-center"><?=$msg?> </h4>
               <!-- <span>or use your account</span> -->
                <input required="true" id="email" value="duong@admin" name="email" type="email" placeholder="Email" />
                <input required="true" id="pwd" value="123123a@B" name="password" type="password" placeholder="Mật Khẩu" minlength="6" />
                <a href="#">Bạn đã quên mật khẩu?</a>
                <a href="../../index.php" style="top: -25px!important;position: relative;">Quay lại trang chủ</a>
                <button style="position:relative; top: -25px;">Đăng nhập</button> 
                
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng quay trở lại!</h1>
                    <p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                    <button class="ghost" id="signIn">Đăng nhập</button>
                    <a href="../../index.php">Quay lại trang chủ</a>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Xin chào</h1>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button class="ghost" id="signUp">Đăng kí</button>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        function validateForm() {
            $pwd = $('#pwd').val();
            $confirmPwd = $('#confirmation_pwd').val();
            if($pwd != $confirmPwd) {
                alert("Mật khẩu không khớp! Vui lòng kiểm tra lại")
                return false
            }
            return true 
        }
    </script>
    <script src="https://kit.fontawesome.com/98638255fc.js" crossorigin="anonymous"></script>
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/stellar.js"></script>
    <script src="../../vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../../vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../../vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../../vendors/isotope/isotope-min.js"></script>
    <script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../../js/jquery.ajaxchimp.min.js"></script>
    <script src="../../vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../vendors/counter-up/jquery.counterup.js"></script>
    <script src="../../js/mail-script.js"></script>
    <script src="../../js/theme.js"></script>
    <script src="../../js/login.js"></script>
      </div>
      