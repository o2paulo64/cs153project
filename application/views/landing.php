<?php
	include 'head.php'
?>
	<article>
	<h1>Welcome, <?php echo($username);?></h1>
	<?php
	foreach ($info->result_array() as $row)
	{
		echo('<p>Username: '.$row['username'].'</p>');
		echo('<p>Name: '.$row['firstname'].' '.$row['lastname'].'</p>');
		echo('<p>Address: '.$row['address'].'</p>');
		echo('<p>Password: '.$row['birthMonth'].' '.$row['birthDay'].','.$row['birthYear'].'</p>');
		
	}
	?>
</body>