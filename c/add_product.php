<?php
session_start();
$error = '';
require '../m/mod_product.php';

$cat_name = isset($_POST['new_cat']) ? $_POST['new_cat'] : NULL;

if (!isset($_POST['new_sub']) && $cat_name !== NULL) {
	add_category($connect, $cat_name);
}
elseif (isset($_POST['new_sub']) && $_POST['category_id'] !== false) {
	add_subcategory($connect, $_POST['new_sub'], $_POST['category_id']);
}
elseif (isset($_POST['prod_cat_button']) && $_POST['category_id'] !== false) {
	$prod_category = $_POST['category_id'];
	$sub_list = select_sub($connect, $prod_category);
}
elseif (isset($_POST['prod_save_button']) && $_POST['sub_id'] !== false && $_POST['new_prod'] !== false && $_POST['prod_price'] !== false) {
	add_product($connect, $_POST['new_prod'], $_POST['prod_price'], $_POST['sub_id']);
}

$cat_list = select_category($connect);


require '../v/_heading.php';
require '../v/product_form.php';
require '../v/_footer.php';

?>