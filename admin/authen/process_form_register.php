<?php

$fullname = $email = $msg = '';

if(!empty($_POST)) {
	$fullname = getPost('fullname');
	$email = getPost('email');
	$pwd = getPost('password');

	if(empty($fullname) || empty($email) || empty($pwd) || strlen($pwd) < 6) {
	} else {
		$created_at = $updated_at = date('Y-m-d H:i:s');
		$pwd =  getSercurityMD5($pwd);
		$userExist = executeResult("select * from User where email = '$email'", true);
		if($userExist != null){
			$msg = '';
			alert("Email đã được đăng ký, vui lòng sử dụng email khác");
		} else {
			
			$sql = "insert into User (fullname, email, password, role_id, created_at, updated_at, deleted) values ('$fullname', '$email', '$pwd', 2, '$created_at', '$updated_at', 0)";
			execute($sql);
			
			header('Location: login.php');
			die();
			
		}
	}
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>