<?php
	error_reporting(0);

?>
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
			<h3>Повідомлення</h3>
		<div class="content">
		<?php
			if($_GET['prochytano']){
				$prochytano = mysql_real_escape_string($_GET['prochytano']);
				mysql_query("UPDATE reviews SET status=1 WHERE id=".$prochytano);
			}
			if($_GET['ne_prochytano']){
				$ne_prochytano = mysql_real_escape_string($_GET['ne_prochytano']);
				mysql_query("UPDATE reviews SET status=0 WHERE id=".$ne_prochytano);
			}
			$q=mysql_query("SELECT id, name, email, phone, message, date, status FROM reviews ORDER BY id DESC");
			
			mysql_query('SET NAMES utf8');
			while ($row=mysql_fetch_array($q,MYSQL_ASSOC))
			{
			echo'<div class="newsbox">';
			echo'<div class="description">';
			echo $row['message'].'<br>';
			echo'</div>';
			
			echo'<div class="contactinf">';
			echo'<div class="cname">';
			echo $row['name'].'<br>';
			echo'</div>';
			
			echo $row['email'].'<br>';
			echo $row['phone'].'<br>';
			
			echo'<div class="date">';
			echo $row['date'].'<br>';
			echo'</div>';
			echo'<br><br>';
			echo'<div class="status">';
			echo $row['status']?"Прочитано":"Не прочитано".'<br>';
			echo'</div>';
			
			if($row['status']){
			echo'<a class="sa" href="messages.php?ne_prochytano='.$row['id'].'">&#10000 </a>';
			}
			else{
			echo'<a class="sa" href="messages.php?prochytano='.$row['id'].'">&#10000 </a>';
			}
			echo'</div>';
			echo'</div>';
			}
		?>
		</div>
		</div>
		<style>
			.status{
			/*border: 1px solid red;*/
			color:#8E0014;}
			
			a.sa{
			text-decoration:none;
			/*border: 1px solid red;*/
			color:#0D0D0D;
			}
			
			
			
			.contactinf{
				min-width:200px;
			}
		</style>
	<div id="footer">
		
	</div>

	

	</body>
</html>
