
<?php
      session_start();
    require_once('../../utils/utility.php');
    require_once('../../database/dbhelper.php');
    $baseUrl = '../';
    $user = getUserToken();
    if($user == null && $user['role_id'] == 2) {
        header('Location: '.$baseUrl.'authen/login.php');
        die();
    }

    $id = $user['id'];
    if($id != '' && $id > 0) {
      $sql = "select * from User where id = '$id'";
      $userItem = executeResult($sql, true);
      if($userItem != null) {
         $fullname = $userItem['fullname'];
         $email = $userItem['email'];
         $phone_number = $userItem['phone_number'];
         $address = $userItem['address'];
         $role_id = $userItem['role_id'];
      } else {
         $id = 0;
      }
    } else {
      $id = 0;
    }
    
?>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   <!-- Popper JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<div class="row">
   <div class="col-md-12 table-responsive">
      <a href="../../" class="btn btn-warning" style="margin-top: 10px; margin-left: 10px;">Trang chủ</a>
<h1 class="text-center" style="margin-top: 15px;">Tài Khoản Người Dùng </h1>
      <style type="text/css">
         .userav > img{
            position: relative;
            padding-top: -50px;
            padding-bottom: -50px;
            padding-left: -50px;
            padding-right: -50px;
            margin-bottom: 50px;
            margin-top: 10px;
            height:180px;
            width: 190px;
            border-radius: 500px;
            border-left: 500px;
            border-right: 500px;
            border-top: 500px;
            border-bottom: 500px;
            border-image: 500px;
            border-inline:2px solid #000000;
         }
      </style>
      <div class="userav" style="text-align:center;"><img src="https://media.giphy.com/media/UksVWFHX6UJby/giphy.gif" style="text-align: center!important;"></div>
      <div class="avatar" >
      <div class="container">
      <div class="panel panel-primary">
         <div class="panel-heading">
         </div>
         <div class="panel-body">
         <form method="post" onsubmit="return validateForm();">
               <div class="form-group">
              <label for="usr">Họ và tên:</label>
              <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>">
              <input type="text" name="id" value="<?=$id?>" hidden="true">
            </div>
            
            <div class="form-group">
              <label for="email">Email:</label>
              <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
            </div>
            <div class="form-group">
              <label for="phone_number">Số điện thoại:</label>
              <input type="tel" class="form-control" id="address" name="phone_number" value="<?=$phone_number?>">
            </div>
            <div class="form-group">
              <label for="address">Địa chỉ:</label>
              <input type="text" class="form-control" id="address" name="address" value="<?=$address?>">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input <?=($id > 0?'':'required="true"')?> type="password" class="form-control" id="pwd" name="password">
            </div>
            <div class="form-group">
              <label for="confirmation_pwd">Nhập lại Password:</label>
              <input <?=($id > 0?'':'required="true"')?> type="password" class="form-control" id="confirmation_pwd" minlength="6">
            </div>
            
            <button class="btn btn-success" style="margin-top:10px;">Cập nhật</button>
            <a href="../authen/logout.php" class="btn btn-danger" style="margin-top:10px;">Đăng xuất</a>
         </form>
         </div>
      </div>
   </div>
      
   </div>
</div>
<script type="text/javascript">
   function logout(){
      header('Location: logout.php');
   }

</script>
