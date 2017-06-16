<?php

$connect = mysqli_connect('localhost', 'root', '', 'db');

function add_category($con, $cat_name) {
	$result = mysqli_query($con, "INSERT INTO category(cat_name) VALUES('{$cat_name}')");
}

function add_subcategory($con, $cat_name, $parent_cat) {
	$result = mysqli_query($con, "INSERT INTO category(cat_name, parent_cat) VALUES('{$cat_name}', '{$parent_cat}')");
}

function select_category($con) {
	$result = mysqli_query($con, "SELECT * FROM category WHERE parent_cat IS NULL");
	return $result;
}

function select_sub($con, $num_cat) {
	$result = mysqli_query($con, "SELECT cat.cat_id, cat.cat_name, sub.cat_id AS sub_id, sub.cat_name AS sub_name, sub.parent_cat AS parent_id FROM category AS cat INNER JOIN category AS sub ON sub.parent_cat=cat.cat_id WHERE cat.parent_cat IS NULL AND cat.cat_id='{$num_cat}'");
	return $result;
}

function add_product($con, $prod_name, $prod_price, $parent_cat) {
	$result = mysqli_query($con, "INSERT INTO products(prod_name, prod_price, parent_cat) VALUES ('{$prod_name}', '{$prod_price}', '{$parent_cat}')");
}

/*function get_category($con, $cat_id = false, $sub_id = false) {
	if($cat_id  === false && $sub_id === false) {
		$result = mysqli_query($con, 'SELECT cat_id, cat_name FROM category WHERE parent_cat IS NULL');
		return $result;
	}
	elseif($cat_id === false) {
		$result = mysqli_query($con, "SELECT cat_name FROM category WHERE parent_cat IS NULL AND cat_id=$cat_id");
		return $result;
	}
	else {
		$result = mysql_query($con, "SELECT cat_name sub_name")
	}
}*/

function get_category($con, $cat_id = false, $sub_id = false) {
	if($cat_id  === false && $sub_id === false) {
		$result = select_category($con);
		return $result;
	}
	elseif($sub_id === false) {
		$result = mysqli_query($con, "SELECT cat_name FROM category WHERE parent_cat IS NULL AND cat_id=$cat_id");
		return $result;
	}
	else $result = mysqli_query($con, "SELECT cat_name FROM category WHERE cat_id=$sub_id");
	return $result;
}

function get_prod($con, $sub_id) {
	$result = mysqli_query($con, "SELECT prod_name, prod_price FROM products WHERE parent_cat=$sub_id");
	return $result;
}

?>