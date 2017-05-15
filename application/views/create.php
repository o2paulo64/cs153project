<?php 
	include 'head.php'
?>
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