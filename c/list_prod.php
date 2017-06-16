<?php
session_start();
$cat_id = $_GET['cat_id'];
$sub_id = $_GET['sub_id'];

require '../m/mod_product.php';
$category = get_category($connect, $cat_id);
$sub_category = get_category($connect, $cat_id, $sub_id);
$get_prod = get_prod($connect, $sub_id);

require '../v/_heading.php';
foreach ($category as $cat) {
	echo '<h2>',$cat['cat_name'],'</h2>';
}
foreach ($sub_category as $sub) {
	echo '<h3>',$sub['cat_name'], '</h3>';
} ?>


<table border="1px, solid, black">
<tr>
	<th>Name</th>
	<th>Price</th>
</tr>

<?php
foreach ($get_prod as $product) { 
?>
 
<tr>
 	<td><?=$product['prod_name']?></td>
 	<td><?=$product['prod_price']?></td>
</tr>


<?php
} ?>
</table>
<?php
require '../v/_footer.php'
?>