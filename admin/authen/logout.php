<?php
	require_once('../../utils/utility.php');
    require_once('../../database/dbhelper.php');
session_start();
$token = getCookie('token');
setcookie('token', '', time() -100, '/');
session_destroy();
header('Location: ../');
?>