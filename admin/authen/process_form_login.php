<?php
$fullname = $email = $msg = '';

if(!empty($_POST)) {
	$email = getPost('email');
	$pwd = getPost('password');
	$pwd = getSercurityMD5($pwd);

	$sql = "select * from User where email = '$email'";
	$userExist = executeResult($sql, true);
	if($userExist == null){
		$msg = '';
		alert("Sai tài khoản hoặc mật khẩu!");
	} else {
		$token = $userExist['email'].time();
		setcookie('token', $token, time() + 7 * 24 * 60 *60, '/');
		$created_at = date('Y-m-d H:i:s');
		$_SESSION['user'] = $userExist;
		$userId = $userExist['id'];
		$sql = "insert into Tokens (user_id, token, created_at) values ('$userId', '$token', '$created_at')";
		execute($sql);
		header('Location: ../../index.php');
		die();
	}
}

?>