<?php
session_start();
$error = '';
require '../m/mod_users.php';
$login = isset($_POST['login']) ? $_POST['login'] : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;
$name = isset($_POST['name']) ? $_POST['name'] : false;


$name = isset($_POST['name']) ? $_POST['name'] : '';
$added_by = isset($_SESSION['current_user']) ? $_SESSION['current_user'] : 'NULL_Admin';




	if($login !== false && $password !== false && $name !== false) {
		
			$new_user = add_user($connect, $login, $password, $name, $added_by);
			if($new_user !== false) {
				header('Location: /');
			}
			else {$error = 'User not added!<br>';}

	}


require '../v/_heading.php';
require '../v/user_form.php';
require '../v/_footer.php';

?>