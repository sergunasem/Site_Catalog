<?php

$con = mysqli_connect('localhost', 'root', '');
mysqli_query($con, 'CREATE DATABASE IF NOT EXISTS db');

$connect = mysqli_connect('localhost', 'root', '', 'db');

mysqli_query($connect, 'CREATE TABLE IF NOT EXISTS users (user_id INT AUTO_INCREMENT PRIMARY KEY, login VARCHAR(10) UNIQUE, password VARCHAR(20), name VARCHAR(20), added_by VARCHAR(20))');

mysqli_query($connect, 'CREATE TABLE IF NOT EXISTS category (cat_id INT AUTO_INCREMENT PRIMARY KEY, cat_name VARCHAR(10) UNIQUE, parent_cat VARCHAR(10))');

mysqli_query($connect, 'CREATE TABLE IF NOT EXISTS products (prod_id INT AUTO_INCREMENT PRIMARY KEY, prod_name VARCHAR(40) UNIQUE, prod_price INT, parent_cat VARCHAR(10))');
mysqli_query($connect, "INSERT INTO users(login, password, name, added_by) VALUES ( 'Admin', 'Admin', 'Null Admin', 'Start')");
Header('Location: /')
?>