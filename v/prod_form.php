<legend>New Product</legend>
<form method="POST">
<select name="category_id" id="">
	<?php foreach ($cat_list as $list) :?>
	<option value="<?=$list['cat_id']?>" <?php if (isset($prod_category) && $prod_category == $list['cat_id']) {echo 'selected';}?>><?= $list['cat_name']?></option>
	<?php endforeach?>
</select>
<button type="submit" name="prod_cat_button" class="btn btn-success">Choose category</button>
</form>

<form action="" method="POST" role="form">

<select name="sub_id" id="">
	<?php foreach ($sub_list as $sub_list) :?>
	<option value="<?=$sub_list['sub_id']?>" <?php if (isset($prod_category) && $prod_category == $list['cat_id']) {echo 'selected';}?>><?= $sub_list['sub_name']?></option>
	<?php endforeach?>
</select>
	

	<div class="form-group">
		<label for="">Name of Product</label>
		<input type="text" name="new_prod" class="form-control" id="" placeholder="Input new Product">
		<label for="">Price of Product</label>
		<input type="text" name="prod_price" class="form-control" id="" placeholder="Input price of Product">
	</div>
	<button type="submit" name="prod_save_button" class="btn btn-primary">Save Product</button>
</form>