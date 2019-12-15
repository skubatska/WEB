<!DOCTYPE>
<html lang="ua" >
	<head>
		<meta charset="UTF-8">
			<title>Контакти</title>
			<link rel="shortcut icon" href="icon1.png">
			<link rel="stylesheet" href="cssoverlay/overlaystyle.css">		
			<link rel='stylesheet' href='cssoverlay/style_menu.css'>
			<link rel="shortcut icon" href="img/ic.png">
			<link rel='stylesheet' href="cs.css">
			
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
		<p class = "nametitle wow fadeInLeft" >Контакти</p>
		<div id = "container">
			
			<div id="content ">
			<?php
				$errcode=0;

				$name=mysqli_real_escape_string($link, $_GET['name']);
				$email=mysqli_real_escape_string($link, $_GET['email']);
				$phone=mysqli_real_escape_string($link, $_GET['phone']);
				$message=mysqli_real_escape_string($link, $_GET['message']);

				if($name)
				{
					$errcode=1;
					$query_string="INSERT INTO reviews(name, phone, email, message) VALUES ('$name', ";
					if($email) $query_string.="'$email', ";
						else $query_string.="NULL, ";
					if($phone) $query_string.="'$phone', ";
						else $query_string.="NULL, ";
					if($message) $query_string.="'$message')";
						else $query_string.="NULL)";
					if(!mysqli_query($link,$query_string))
					{
						$errcode=2;
					}
				}
			?>
			</div>
			
			<div class = "ourcontacts wow fadeInLeft">
				<p class = "title">Телефон</p>
				<p class = "text">+38 000 000 00 00<br>+38 000 000 00 00</p>
				<p class = "title">Email</p>
				<p class = "text">volunteerora@gmail.com</p>
				<p class = "title">Адреса</p>
				<p class = "text">м. Коломия вул. Коломийська, 8a</p>
				<p class = "title">Соціальні мережі</p>
				<a href="#"><img src="SNicon/emlicon.png" class="snicon"></a>
				<a href="#"><img src="SNicon/fbicon.png" class="snicon"></a>
				<a href="#"><img src="SNicon/ticon.png" class="snicon"></a>
				<a href="#"><img src="SNicon/insticon.png" class="snicon"></a>
			</div>
			
			<div class = "message wow fadeInLeft">
				<form action="" method="GET">
					<p>Ваше ім'я:</p>
					<input name="name" type="text" id='input'><br>
					<p>Ваш email:</p>
					<input name="email" type="text" id='input'><br>
					<p>Ваш номер:</p>
					<input name="phone" type="text" id='input'><br>
					<p>Ваше повідомлення:</p>
					<input name="message" type="text" id='input2'><br>
					
					<input type="submit" value="Надіслати" id = 'send'>
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
			
			<iframe class="wow fadeInLeft" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2642.000403967213!2d25.038165615663!3d48.53322397925692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4736d29057abf5b3%3A0xbe99f0c2dee6921f!2z0JrQvtC70L7QvNC40LnRgdGM0LrQuNC5INC_0L7Qu9GW0YLQtdGF0L3RltGH0L3QuNC5INC60L7Qu9C10LTQtg!5e0!3m2!1suk!2sua!4v1558302332853!5m2!1suk!2sua" " allowfullscreen></iframe>
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