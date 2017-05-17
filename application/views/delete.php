<?php
	include 'head.php';
?>

	<div class='container-fluid'>
		<div class='well well-sm'>
			<center><h2>Delete Entries</h2></center>
			
		</div>
	</div>
	<div class='container'>
		<table class="table table-striped table-bordered table-condensed">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Birthday</th>
					<th>Action</th>
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
						echo('<button type="submit" >Delete Entry</a> ');
						echo("</form>");
						echo("</td>");
						echo("</tr>");
				}
				?>
			</tbody>
		</table>	
	</div>
</body>