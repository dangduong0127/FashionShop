<?php
$baseUrl = '../';
if(!empty($_POST)){
	$id = getPost('id');
	$fullname = getPost('fullname');
	$email = getPost('email');
	$phone_number = getPost('phone_number');
	$address = getPost('address');
	$password = getPost('password');
	if($password != '') {
		$password = getSercurityMD5($password);
	}
	
	$role_id = getPost('role_id');
	$created_at = $updated_at = date("Y-m-d H:i:s");
	

	if($id > 0) {
		//update
		$sql = "select * from User where email = '$email' and id <> $id";
		$userItem = executeResult($sql, true);
		if($userItem != null) {
			echo "<h3>Email này đã được sử dụng ở tài khoản khác!!!</h3>";
		} else {
			if($password != '') {
			$sql = "update User set fullname = '$fullname', email = '$email', phone_number = '$phone_number', address = '$address', password = '$password', role_id = '$role_id', updated_at = '$updated_at' where id = $id";
		} else {
			$sql = "update User set fullname = '$fullname', email = '$email', phone_number = '$phone_number', address = '$address', role_id = '$role_id', updated_at = '$updated_at' where id = $id";
		}
		execute($sql);
		alert('Cập nhật thành công!!!');
		}
		
	} else {
		//insert
		$sql = "select * from User where email = '$email'";
		$userItem = executeResult($sql, true);
		if($userItem == null) {
		$sql = "insert into User(fullname, email, phone_number, address, password, role_id, created_at, updated_at, deleted) values ('$fullname','$email', '$phone_number', '$address', '$password', '$role_id', '$created_at', '$updated_at', 0)";
		execute($sql);
		alert("Đăng ký thành công!");
		} else{
			alert("Email đã được đăng ký, vui lòng sử dụng email khác");

		}
	}
	
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
