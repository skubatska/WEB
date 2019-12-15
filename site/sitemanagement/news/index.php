<?php
	$link = mysqli_connect('localhost', 'root', '', 'volunteer_organization');
	$link->set_charset("utf8");/*мова*/
	error_reporting(0);
?>

<html>
<head>
	<title>новини</title>
	<link rel="shortcut icon" href="../icon1.png">
	
	<link rel='stylesheet' type='text/css' href='css/1.css'> <!-- оформлення контенту-->
	
	<link rel='stylesheet' type='text/css' href='../menu/css/menustyle3.css'>
</head>
<body>
	<?php include '../menu/menu.html' ?>
	
	
	<div class="container">
	<h3>Публікація новин та подій</h3>
	
	<div class="nhref">

		<a href="add.php">Додати </a>
		<a href="edit.php">Редагувати </a>
		<a href="delete.php">Видалити </a>
	
	</div>
	
	<style>
		a{
			text-decoration:none;
			color: black;
			text-align:center;
		}
		.nhref{
			text-decoration:none;
			color: red;
			text-align:center;
		}
	</style>
	
	
	<br>
	
	<table>
		<tr>
			<th>Заголовок</th>
			<th>Підзаголовок</th>
			<th>Новини</th>
			<th>Фото&Дата</th>
			
		</tr>
	<?php
		$query = mysqli_query($link, 'SELECT * FROM news ORDER BY id DESC');
		while($row=mysqli_fetch_array($query)){
		?>
		<tr>
			<td class="mtitle"><?php echo $row['title'];?></td>
			<td class="title"><?php echo $row['subtitle'];?></td>
			<td class="tablenews"><?php echo $row['news'];?></td>
			<td class="news"><?php echo "<img src='".$row['photo']."'>";?><br><?php echo $row['date'];?></td>
			
		</tr>
	
	<?php
		}
	?>
	</table>
	</div>
</body>
</html>
