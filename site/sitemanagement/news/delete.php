<?php
	$link = mysqli_connect('localhost', 'root', '', 'volunteer_organization');
	$link->set_charset("utf8");/*мова*/
	error_reporting(0);
?>

<?php
	$errcode=0;

	$id=(int)$_GET['id'];
	$confirmation=$_GET['confirmation'];
	if($id&&$confirmation){
		if(mysqli_query($link,"SELECT * FROM news WHERE id=$id")->num_rows!=1)
			{$errcode=2;}
		else{
			$errcode=1;
			$query_string="DELETE FROM news WHERE id=$id";
			if(!mysqli_query($link,$query_string)){
				$errcode=2;
			}
		}
	}
?>

<html>
<head>
	<title>Видалити </title>
	<link rel="shortcut icon" href="../icon1.png">
	
	<link rel='stylesheet' type='text/css' href='css/contentstyle5.css'> <!-- оформлення контенту-->
	
	<link rel='stylesheet' type='text/css' href='../menu/css/menustyle3.css'>
</head>
<body>
<?php include '../menu/menu.html' ?>

<div class="container">
	<h3>Видалити</h3>
	<?php if ($id&&!$confirmation){?><p>Видалити дані?</p><a href="?id=<?php echo $_GET['id'];?>&confirmation=true">Так<br><br></a><?php } ?>
	<?php
		switch($errcode){
		case 0:break;
		case 1:
		{
		?>
		<div class="message success">
			<p>Видалено</p>
		</div>
		<?php
		break;
		}
		case 2:
		default:
		{
		?>
		<div class="message error">
			<p>Невідома помилка</p>
		</div>	
		<?php
		}
		}
	?>
	<a href="index.php">Назад</a>
	<table>
		<tr>
			<th></th>
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
			<td><a class="delete" href="?id=<?php echo $row['id']?>">&#10006;</a></td>
			<td class="title"><?php echo $row['title'];?></td>
			<td class="title"><?php echo $row['subtitle'];?></td>
			<td class=""><?php echo $row['news'];?></td>
			<td class="news"><?php echo "<img src='".$row['photo']."'>";?><br><?php echo $row['date'];?></td>
			
		</tr>
	<?php
		}
	?>
	</table>
	
	<style>
	a{
		text-decoration:none;
		color: black;
	}
	</style>
	
</div>
</body>
</html>
