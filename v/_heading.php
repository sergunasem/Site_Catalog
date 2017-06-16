<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

	<style>
		nav form {
			float: right;
			margin-top: 15px;
		}

		.greeting {
		float: right;
		margin-right: 40px;
		margin-top: -15px;
		color: white;
	</style>


	<div class="container">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
			<?php 
			if($connect === false) :
			?>	
				<a class="navbar-brand" href="m/create_db.php">Start</a>
			<?php
			else :
			?>	

				<ul class="nav navbar-nav">
					<li>
						<a href="/">Home</a>
					</li>
			<?php 
			if(!empty($_SESSION['current_user'])) :?>				
					<li>
						<a href="/c/add_user.php">New User</a>
					</li>
					<li>
						<a href="/c/add_product.php">Add Product</a>
					</li>
			<?php endif;?>	
				</ul>
				<div>
		
		<?php 
			if(empty($_SESSION['current_user'])) :?>
			
				<form action="/c/login.php" method="post">
				<input type="text" name="authlogin" placeholder="input login">
				<input type="password" name="authpass" placeholder="input password">
				<input type="submit" name="authorisation" value="Login">
				</form>
			<?php 
			else :?>
				<form action="/c/login.php" method="post">
			  <input type="submit" name="logout" value="Logout">
			  </form>

		<?php endif;
		?>
		<div class="greeting">
			<div class="usergreet"><h2>Hello, <?= !empty($_SESSION['current_user']) ? $_SESSION['current_user'].'!' : 'Anonym!' ?></h2></div>
			
		</div>
		<?php endif?>
		</div>
			</div>
		</nav>
