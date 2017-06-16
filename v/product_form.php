
<form method="POST">
<button type="submit" name="add_cat" class="btn btn-success">Add new category</button>
<button type="submit" name="add_sub" class="btn btn-success">Add new subcategory</button>
<button type="submit" name="add_prod" class="btn btn-success">Add new product</button>
</form>

<?php
if (isset($_POST['add_cat'])) {
	require '../v/cat_form.php';
}
elseif (isset($_POST['add_sub'])) {
	require '../v/sub_form.php';
}
else { //if (isset($_POST['add_prod']))
	require '../v/prod_form.php';
}
?>
