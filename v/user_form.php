<form method="POST" class="form-horizontal" role="form">
		<div class="page-header">
			<h1> New <small>User</small></h1>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<label for="">Login</label>
				<input type="text" name="login" class="form-control" required="required" title="">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control" required="required" title="">

			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<label for="">Full Name</label>
				<input type="text" name="name" class="form-control" required="required" title="">

			</div>
		</div>

		
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" name="save_user" class="btn btn-primary">Save User</button>
			</div>
		</div>
</form>