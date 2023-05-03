 <?php
    $title = 'Thêm/Sửa Tài Khoản Người Dùng';
    $baseUrl = '../';
    require_once('../layouts/header.php');
    $id = $msg = $fullname = $email = $phone_number = $address = $role_id= '';
    require_once('form_save.php');
    $id = getGet('id');
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
    $sql = "select * from Role";
    $roleItems = executeResult($sql);
    
?>

<div class="row">
	<div class="col-md-12 table-responsive">
		<h1 class="text-center" style="margin-top: 15px;">Thêm/Sửa Tài Khoản Người Dùng </h1>
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
				  <label for="usr">Quyền:</label>
				  <select class="form-control" name="role_id" id="role_id" required="true">
				  		<option value="">--Chọn đê--</option>
				  		<?php
				  			foreach($roleItems as $role) {
				  				if($role['id'] == $role_id) {
				  					echo '<option selected value="'.$role['id'].'">'.$role['name'].'</option>';
				  				} else {
				  					echo '<option value="'.$role['id'].'">'.$role['name'].'</option>';
				  				}
				  			}
				  		?>
				  </select>
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
				
				<button class="btn btn-success" style="margin-top:10px;">Đăng ký</button>
			</form>
			</div>
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
<?php
    require_once('../layouts/footer.php');
?>