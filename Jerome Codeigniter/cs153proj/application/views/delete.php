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
					<li><a href="<?php echo base_url('index.php/Landing_controller/index')?>">Home</a></li>
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
					<li><a href="<?php echo base_url('index.php/ViewDelete_controller/index')?>">Delete Users</a></li>
					<li><a href="<?php echo base_url('index.php/ViewUpgrade_controller/index')?>">Upgrade Users</a></li>
				</ul>
		</div>
	</nav>
	<article>
	<h1>Welcome, <?php echo($username);?></h1>
	<h2>Delete Entries</h2>
	<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Birthday</th>
					<th> </th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($results->result_array() as $row)
				{
					echo("<tr>");
					echo("<td>".$row['firstname']."</td>");
					echo("<td>".$row['lastname']."</td>");
					echo("<td>".$row['birthMonth']." ".$row['birthDay'].",".$row['birthYear']."</td>");
						echo("<td>");
						echo('<form accept-charset="UTF-8" role="form" action ="');
						echo base_url('index.php/Delete_controller/index');
						echo ('" method="POST">');
						echo ('<input type="hidden" name="userId" value="'.$row['userId'].'">');
						echo('<button type="submit" >Delete Entry</a>');
						echo("</form>");
						echo("</td>");
						echo("</tr>");
				}
				?>
			</tbody>
		</table>	
</body>