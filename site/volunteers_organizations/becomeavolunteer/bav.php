<!DOCTYPE>
<html lang="ua" >
	<head>
		<meta charset="UTF-8">
			<title>Стати волонтером</title>
			<link rel="stylesheet" href="cssoverlay/overlaystyle.css">		
			<link rel='stylesheet' href='cssoverlay/style_menu.css'>
			<link rel="shortcut icon" href="img/ic.png">
			<link rel='stylesheet' href="bav2.css">
			
			<link rel="stylesheet" href="animate.css">
			<script src="wow.min.js"></script>
			<script>
				new WOW().init();
			</script>
	</head>
	<?php
		$link = mysqli_connect('localhost', 'root', '', 'vomessage');
		$link->set_charset("utf8");/*мова*/
		error_reporting(0);
	?>
	<body>
		<div id = "hedader">
			<p class = "mayb">Майбутнє.</p>
		</div>
		
		<!--p>Ставай частиною великих змін!</p-->
		<section class="sec1"></section>
		<p class = "nametitle">Стати волонтером</p>
		<div id = "container">
			
			<div id="content">
			<?php
				$errcode=0;

				$name=mysqli_real_escape_string($link, $_GET['name']);
				$email=mysqli_real_escape_string($link, $_GET['email']);
				$phone=mysqli_real_escape_string($link, $_GET['phone']);
				$city=mysqli_real_escape_string($link, $_GET['city']);
				$birth=mysqli_real_escape_string($link, $_GET['birth']);
				$description=mysqli_real_escape_string($link, $_GET['description']);

				if($name)
				{
					$errcode=1;
					$query_string="INSERT INTO becomeavolunteer(name, email, phone, city, birth, description) VALUES ('$name', ";
					if($email) $query_string.="'$email', ";
						else $query_string.="NULL, ";
					if($phone) $query_string.="'$phone', ";
						else $query_string.="NULL, ";
					if($city) $query_string.="'$city', ";
						else $query_string.="NULL, ";
					if($birth) $query_string.="'$birth', ";
						else $query_string.="NULL, ";
					if($description) $query_string.="'$description')";
						else $query_string.="NULL)";
					if(!mysqli_query($link,$query_string))
					{
						$errcode=2;
					}
				}
			?>
			</div>
			
		
			
			<div class = "message">
				<form action="" method="GET">
					<p class = "wow fadeInLeft">Ваше ім'я:</p>
					<input class = "wow fadeInLeft" name="name" type="text" id='input'><br>
					<p class = "wow fadeInLeft">Ваш email:</p>
					<input class = "wow fadeInLeft" name="email" type="text" id='input'><br>
					<p class = "wow fadeInLeft">Ваш номер:</p>
					<input class = "wow fadeInLeft" name="phone" type="text" id='input'><br>
					<p class = "wow fadeInLeft">Місто:</p>
					<input class = "wow fadeInLeft" name="city" type="text" id='input'><br>
					<p class = "wow fadeInLeft">День народження:</p>
					<input class = "wow fadeInLeft" name="birth" type="text" id='input'><br>
					<p class = "wow fadeInLeft">Які теми волонтерства тебе цікавлять:</p>
					<input class = "wow fadeInLeft" name="description" type="text" id='input2'><br>
					
					<input class = "wow fadeInLeft" type="submit" value="Надіслати" id = 'send'>
				</form>
				
				<?php
					switch($errcode){
					case 0:break;
					case 1:
					{
				?>
				<div class="message success">
					<p>Ваше повідомлення успішно відправлено</p>
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
				<div class = 'bottom'>
				</div>
			
			</div>
		</div>
		<div id="footer">
			<div class="iconblock">
				<a href="#"><img src="../SNicon/emlicon.png" class="snicon"></a>
				<a href="#"><img src="../SNicon/fbicon.png" class="snicon"></a>
				<a href="#"><img src="../SNicon/ticon.png" class="snicon"></a>
				<a href="#"><img src="../SNicon/insticon.png" class="snicon"></a>
			</div>
			
			<p>+38 000 000 00 00, volunteerora@gmail.com<br>	м. Коломия вул. Коломийська, 8a</p>
		</div>

	<div class="overlay">
		<nav class="overlayMenu">  
				<ul role="menu">
					<a href="../home/home.php" role="menuitem"><img src="icon.png" width="100" id="iconhome"></a>
					<li><a href="../about/about.php" role="menuitem">ПРО НАС</a></li>
					<li><a href="../news/news.php" role="menuitem">НОВИНИ & ПОДІЇ</a></li>
					<li><a href="../projects/projects.php" role="menuitem">ПРОЕКТИ</a></li>
					<li><a href="../contacts/contacts.php" role="menuitem">КОНТАКТИ</a></li><br>
					<li class="btnmenu"><a class="bmenu" href="../becomeavolunteer/bav.php" role="menuitem">СТАТИ ВОЛОНТЕРОМ</a></li>
					<li class="btnmenu"><a class="bmenu" href="../findvolunteers/findvolunteers.php" role="menuitem">ЗНАЙТИ ВОЛОНТЕРІВ</a></li>
				</ul>
		</nav>
	</div>
	<div class="navBurger" role="navigation" id="navToggle"></div> 
	<script src='jQuery/jQuery.js'></script>
    <script  src="js/index.js"></script>
	
	</body>
</html>