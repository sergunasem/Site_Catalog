<form action="" method="POST" role="form">
	<legend>Subcategory</legend>

	<div class="form-group">
	
	<select name="category_id" id="">
<?php foreach ($cat_list as $list) :?>
	<option value="<?=$list['cat_id']?>"><?= $list['cat_name']?></option>			
<?php endforeach?>
	</select><br>

		<label for="">Name of Subcategory</label>
		<input type="text" name="new_sub" class="form-control" id="" placeholder="Input new Subcategory">
	</div>

	<button type="submit" class="btn btn-primary">Save Subcategory</button>
</form>