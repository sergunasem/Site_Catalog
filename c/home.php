<?php
if($connect !== false) {
	require 'm/mod_product.php';
	$get_cat = get_category($connect);
	foreach ($get_cat as $name_cat) {
		
	require 'v/_Home_head.php'; 
	?>
	<a href="c/list_cat.php?cat_id=<?= $name_cat['cat_id'] ?>"> <?= $name_cat['cat_name']?> </a><hr>

	<?php
		$get_sub = select_sub($connect, $name_cat['cat_id']);
		foreach ($get_sub as $sub_name) { ?>
			<a href="/c/list_prod.php?cat_id=<?= $sub_name['parent_id'] ?>&sub_id=<?= $sub_name['sub_id']?>"> <?=$sub_name['sub_name'],' ';?></a>

		<?php
		}
	require 'v/_Home_foot.php';
	}
}
?>