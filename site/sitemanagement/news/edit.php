<?php
	$link = mysqli_connect('localhost', 'root', '', 'volunteer_organization');
	$link->set_charset("utf8");/*мова*/
	error_reporting(0);
?>

<?php
	$errcode=0;

	$id=(int)$_GET['id'];
	
	$title=mysqli_real_escape_string($link, $_GET['title']);
	$subtitle=mysqli_real_escape_string($link, $_GET['subtitle']);
	$news=mysqli_real_escape_string($link, $_GET['news']);
	$photo=mysqli_real_escape_string($link, $_GET['photo']);
	$date=mysqli_real_escape_string($link, $_GET['date']);

	
	if($id){
		if(mysqli_query($link,"SELECT * FROM news WHERE id=$id")->num_rows!=1)
		{$errcode=2;}
		elseif($title){
			$errcode=1;
			$query_string="UPDATE news SET title='$title', ";
			$query_string.="subtitle=";
			if($subtitle) $query_string.="'$subtitle', ";
				else $query_string.="NULL, ";
			$query_string.="news=";
			if($news) $query_string.="'$news', ";
				else $query_string.="NULL ";
			$query_string.="photo=";
			if($photo) $query_string.="'$photo', ";
				else $query_string.="NULL ";
			$query_string.="date=";
			if($date) $query_string.="'$date' ";
				else $query_string.="NULL ";
			$query_string.="WHERE id=$id";
			
			/*echo $query_string;*/	/*відображає стан*/
			if(!mysqli_query($link,$query_string)){
				$errcode=2;
			}
		}
	}
?>

<html>
<head>
	<title>Редагувати </title>
	<link rel="shortcut icon" href="../icon1.png">
	
	<link rel='stylesheet' type='text/css' href='css/contentstyle5.css'> <!-- оформлення контенту-->
	
	<link rel='stylesheet' type='text/css' href='../menu/css/menustyle3.css'>
</head>
<body>
<?php include '../menu/menu.html' ?>

<div class="container">
	<h3>Редагувати</h3>
	<?php
	if($id&&!$title){
	?>

	<form class="frm" action="" method="GET">
		<?php
			$query = mysqli_query($link, "SELECT * FROM news WHERE id=$id");
			$row=mysqli_fetch_array($query);
		?>
		<p>Заголовок:</p>
		<input name="title" type="text" value="<?php echo $row['title'];?>"><br>
		<p>Підзаголовок:</p>
		<input name="subtitle" type="text" value="<?php echo $row['subtitle'];?>"><br>
		<p>Текст:</p>
		<input class="text" name="news" type="text" value="<?php echo $row['news'];?>"><br>
		<p>Посилання на зображення:</p>
		<input name="photo" type="text" value="<?php echo $row['photo'];?>"><br>
		<p>Дата:</p>
		<input name="date" type="date" value="<?php echo $row['date'];?>"><br>
		
		<input name="id" type="hidden" value="<?php echo $id;?>">
		<input class="btn" type="submit" value="Надіслати">
	</form>
	<?php
	}
	?>
	
	<a href="index.php">Назад</a>
	<?php
		switch($errcode){
		case 0:break;
		case 1:
		{
		?>
		<div class="message success">
			<p>Дані збережено.</p>
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
			<td><a class="edit" href="?id=<?php echo $row['id']?>">&#9998;</a></td>
			<td class="title"><?php echo $row['title'];?></td>
			<td class="title"><?php echo $row['subtitle'];?></td>
			<td class=""><?php echo $row['news'];?></td>
			<td class="news"><?php echo "<img src='".$row['photo']."'>";?><br><?php echo $row['date'];?></td>
			
		</tr>
	<?php
		}
	?>
	</table>
</div>

<style>
	a{
		text-decoration:none;
		color: black;
	}
	</style>
</body>
</html>
