<?php
	$link = mysqli_connect('localhost', 'root', '', 'volunteer_organization');
	$link->set_charset("utf8");/*мова*/
	error_reporting(0);
?>

<html>
<head>
	<title>Головна</title>
	<link rel="shortcut icon" href="../icon1.png">
	
	<link rel='stylesheet' type='text/css' href='../menu/css/menustyle3.css'>
	
	<link rel='stylesheet' type='text/css' href='hms.css'>
	
	
</head>
<body>
	<?php include '../menu/menu.html' ?>
	
	
	<div class="container">
		<br><br><br><br><br><br><h1>АДМІН-ПАНЕЛЬ</h1>
		<style>
			
		</style>
		<!--a href="../exit.php" class="exit">x</a-->
		
	</div>
</body>
</html>
