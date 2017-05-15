<!doctype html>
<?php echo link_tag('assets/css/style.css')?>
<?php echo link_tag('assets/css/login.css')?>
<html lang="en">

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Project</title>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">	
<link href="css/login.css" rel="stylesheet" type="text/css">	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>

<body>

	<nav class='navbar navbar-inverse navbar-static-top' id='navdesign'>
		<div class='container-fluid'>
		<!-- Brand and toggle get grouped for better mobile display -->
		
				
			<!-- Collect the nav links, forms, and other content for toggling -->
				<div class='navbar-header navbar-s'>
					<button type='button' class='navbar-toggle collapsed'  data-toggle='collapse' data-target='#topFixedNavbar1' aria-expanded='false'><span class='sr-only'>Toggle navigation</span><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></button>
				
					<a class='navbar-brand' href='#' style="margin-top: -5px;"> <img  src='images/logo.png' width='30' height='30' alt='logo'/></a>
				</div>	
			<div class='collapse navbar-collapse' id='topFixedNavbar1'>	

				<ul class='nav navbar-nav'>

					<li class='dropdown'>
						<a href="<?php echo base_url('index.php/Create_controller/index')?>" class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Create<span class='caret'></span></a>
						<ul class='dropdown-menu'>
							<li><a href='#'></a></li>
						</ul>
					</li>

					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Update<span class='caret'></span></a>
						<ul class='dropdown-menu'>
							<li><a href='#'></a></li>
						</ul>
					</li>

					<li><a href='#'>View</a></li>
					<li><a href='#'>Delete Users</a></li>
				</ul>
		</div>
	</nav>
	<article>
	<h1>Welcome, <?php echo($username);?></h1>
	<?php
		if(validation_errors() != "")
		{
			echo('<div class="alert alert-danger"><strong>'.validation_errors().'</strong></div>');
		}
	?>
	<form action ="<?php echo base_url('index.php/AddUser_controller'); ?>" method='POST'>
		First name:<br>
		<input type="text" name="firstname"><br>
		Last name:<br>
		<input type="text" name="lastname"><br>
		BirthMonth:<br>
		<input type="text" name="birthMonth"><br>
		BirthDay:<br>
		<input type="text" name="birthDay"><br>
		BirthYear:<br>
		<input type="text" name="birthYear"><br>
		Address:<br>
		<input type="text" name="address"><br>
		username:<br>
		<input type="text" name="username"><br>
		Password:<br>
		<input type="password" name="password"><br>
		Retype Password:<br>
		<input type="password" name="repassword"><br>
		
		<input type="submit" value="Submit">
	</form>
</body>