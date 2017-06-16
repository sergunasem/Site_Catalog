<?php

const USERS = 'users';

$connect = mysqli_connect('localhost', 'root', '', 'db');

function add_user($con, $login, $password, $name, $added_by) {
	
	$result = mysqli_query($con, "INSERT INTO users(login, password, name, added_by) VALUES ( '{$login}', '{$password}', '{$name}', '{$added_by}')");
	return $result;

}

function select_user($con, $field) {
	$result = mysqli_query($con, "SELECT $field FROM USERS");
	return $result;
}

function login($con, $login, $password) {
	$result = mysqli_query($con, "SELECT name FROM users WHERE login='".$login."' AND password = '".$password."'");
foreach($result as $name) {
		return $name['name'];
	}
}

?>