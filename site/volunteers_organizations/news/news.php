<!DOCTYPE html>
<html lang="ua" >
	<head>
		<link rel="stylesheet" href="cssoverlay/overlaystyle.css">
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
		<div id="hedader">
			<p class = "mayb">Майбутнє.</p>
		</div>
		<p class = "nametitle">Новини&Події</p>
		<div id="container">
		<div id="content">
		<?php
			$q=mysql_query("SELECT id, photo, date, title, subtitle FROM news ORDER BY id DESC");
			while ($row=mysql_fetch_array($q,MYSQL_ASSOC))
			{
			echo'<div class="newsbox">';
			echo "<img src='".$row['photo']."'><br>";
			echo $row['date'].'<br>';
			echo '<a class="asrc" href = page.php?id='.$row['id'].'>'.$row['title'].'</a><br>';
			echo $row['title'].'<br>';
			echo $row['subtitle'].'<br>';
			echo'</div>';
			}
		?>
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
	
		<style>
			.newsbox{
				min-width:350px;
			}
		</style>
	
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
