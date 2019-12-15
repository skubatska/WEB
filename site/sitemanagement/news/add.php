<?php
	$link = mysqli_connect('localhost', 'root', '', 'volunteer_organization');
	$link->set_charset("utf8");/*мова*/
	error_reporting(0);
?>

<?php
	$errcode=0;

	$title=mysqli_real_escape_string($link, $_GET['title']);
	$subtitle=mysqli_real_escape_string($link, $_GET['subtitle']);
	$news=mysqli_real_escape_string($link, $_GET['news']);
	$photo=mysqli_real_escape_string($link, $_GET['photo']);
	$date=mysqli_real_escape_string($link, $_GET['date']);

	if($title){
		$errcode=1;
		$query_string="INSERT INTO news(title, subtitle, news, photo, date) VALUES ('$title', ";
                if($subtitle) $query_string.="'$subtitle', ";
                else $query_string.="NULL, ";
                if($news) $query_string.="'$news', ";
                        else $query_string.="NULL, ";
                if($photo) $query_string.="'$photo', ";
                        else $query_string.="NULL, ";
                if($date) $query_string.="'$date')";
                        else $query_string.="NULL)";
		if(!mysqli_query($link,$query_string)){
			$errcode=2;
		}
	}
?>

<html>
<head>
	<title>Додати </title>
	<link rel="shortcut icon" href="../icon1.png">
	
	<link rel='stylesheet' type='text/css' href='css/contentstyle5.css'> <!-- оформлення контенту-->
	
	<link rel='stylesheet' type='text/css' href='../menu/css/menustyle3.css'>
</head>
<body>
<?php include '../menu/menu.html' ?>

<div class="container">
	<h3>Додати </h3>
	
	<form class="frm" action="" method="GET" >
		<p>Заголовок:</p>
		<input name="title" type="text"><br>
		<p>Підзагаоловок:</p>
		<input name="subtitle" type="text"><br>
		<p>Текст:</p>
		<input class="text" name="news" type="text"><br>
		<p>Посилання на зображення:</p>
		<input name="photo" type="text"><br>
		<p>Дата:</p>
		<input name="date" type="date"><br>
		<input class="btn" type="submit" value="Додати">
	</form>
	
	<a href="index.php">Назад</a>
	<?php
		switch($errcode){
		case 0:break;
		case 1:
		{
		?>
		<div class="message success">
			<p>Дані додано</p>
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
