<?php
session_start();
require '../m/mod_users.php';
if (isset($_POST['authorisation']))	{
	$login = isset($_POST['authlogin']) ? $_POST['authlogin'] : '';
	$password = isset($_POST['authpass']) ? $_POST['authpass'] : '';
	$current_user = login($connect, $login, $password);
}
elseif(isset($_POST['logout'])) {
	$current_user = '';
}
$_SESSION['current_user'] = $current_user;
header('Location: /');

?>