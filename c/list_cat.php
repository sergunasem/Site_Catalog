<?php
session_start();
require '../m/mod_product.php';

$cat_id = $_GET['cat_id'];
$get_cat = get_category($connect, $cat_id);

require '../v/_heading.php';



foreach ($get_cat as $name_cat) {


echo $name_cat['cat_name'],'<hr>';

	$get_sub = select_sub($connect, $cat_id);
	foreach ($get_sub as $sub_name) { ?>
		
		<a href="/c/list_prod.php?cat_id=<?=$sub_name['parent_id'] ?>&sub_id=<?=$sub_name['sub_id']?>"> <?=$sub_name['sub_name'],' ';?></a>
		
	<?php 
	}
}

require '../v/_footer.php'

?>