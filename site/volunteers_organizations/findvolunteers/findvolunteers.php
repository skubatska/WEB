<!DOCTYPE>
<html lang="ua" >
	<head>
		<meta charset="UTF-8">
			<title>Знайти волонтерів</title>
			<link rel="shortcut icon" href="icon1.png">
			<link rel="stylesheet" href="cssoverlay/overlaystyle.css">		
			<link rel='stylesheet' href='cssoverlay/style_menu.css'>
			<link rel="shortcut icon" href="img/ic.png">
			<link rel='stylesheet' href="fn.css">
			
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
		
		<!--p>
		Вам потрібна допомога добровольців для організації, проекту або події, що змінює Україну?
		<br>
		Ми допоможемо!
		
		Якщо ви шукаєте волонтерів — будь ласка, максимально точно заповніть форму запиту волонтерів. Це допоможе нам швидше обробити ваш запит. 
		</p-->
		
		
		<p class = "nametitle">Знайти волонтерів</p>
		<div id = "container">
			
			<div id="content">
			<?php
				$errcode=0;

				$name=mysqli_real_escape_string($link, $_GET['name']);
				$email=mysqli_real_escape_string($link, $_GET['email']);
				$phone=mysqli_real_escape_string($link, $_GET['phone']);
				$description=mysqli_real_escape_string($link, $_GET['description']);

				if($name)
				{
					$errcode=1;
					$query_string="INSERT INTO findvolunteers(name, email, phone, description) VALUES ('$name', ";
					if($email) $query_string.="'$email', ";
						else $query_string.="NULL, ";
					if($phone) $query_string.="'$phone', ";
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
					<p class="wow fadeInLeft">Ваше ім'я:</p>
					<input class="wow fadeInLeft" name="name" type="text" id='input'><br>
					<p class="wow fadeInLeft">Ваш email:</p>
					<input class="wow fadeInLeft" name="email" type="text" id='input'><br>
					<p class="wow fadeInLeft">Ваш номер:</p>
					<input class="wow fadeInLeft" name="phone" type="text" id='input'><br>
					<p class="wow fadeInLeft">Анонс:<br>
					Організатор<br>
					Назва заходу<br>
					Контактна особа<br>
					Мета заходу в одному реченні<br>
					Що волонтери повинні робити?<br>
					Дата і час коли потрібні волонтери<br>
					Місто та адреса де потрібні волонтери<br>
					Посилання на форму реєстрації волонтерів<br>
					Що волонтери отримають від участі? (мотивація)<br>
					Посилання на подію або ресурс, де можна переглянути деталі</p>
					<input class="wow fadeInLeft" name="description" type="text" id='input2'><br>
					
					<input class="wow fadeInLeft" type="submit" value="Надіслати" id = 'send'>
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