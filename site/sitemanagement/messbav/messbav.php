<!DOCTYPE html>
<html lang="ua" >
	<head>
	
		<link rel='stylesheet' type='text/css' href='../menu/css/menustyle3.css'>
	</head>
	<?php 
		include "head.php"; 
		include "start.php"; 
	?>
	<?php
		if(isset($_GET['id'])){
		$id=$_GET['id'];}else{$id=1;}
	?>
	
	<body>
	<?php include '../menu/menu.html' ?>
		<div id="hedader">
			
		</div>
		
		<div class="container">
			<h3>Запити стати волонтером</h3>
		<div class="content">
		<?php
			
			$q=mysql_query("SELECT id, name, email, phone, city, birth, description, date FROM becomeavolunteer ORDER BY id DESC");
			
			mysql_query('SET NAMES utf8');
			while ($row=mysql_fetch_array($q,MYSQL_ASSOC))
			{
			echo'<div class="messagebox">';
			
			echo'<div class="description">';
			echo $row['description'].'<br>';
			echo'</div>';
			
			echo'<div class="contactinf">';
			echo'<div class="cname">';
			echo $row['name'].'<br>';
			echo'</div>';
			
			echo $row['email'].'<br>';
			echo $row['phone'].'<br>';
			echo $row['city'].'<br>';
			echo $row['birth'].'<br>';
		
			
			echo'<div class="date">';
			echo $row['date'].'<br>';
			echo'</div>';
			
			echo'</div>';	
			echo'</div>';
			}
		?>
		</div>
		</div>
	<div id="footer">
		
	</div>

		<style>
			.contactinf{
				min-width:200px;
			}
		</style>

	</body>
</html>
