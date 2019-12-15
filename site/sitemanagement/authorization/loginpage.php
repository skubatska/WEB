<?php
	error_reporting(0); // приховати помилки від PHP
	session_start();
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password =  mysql_real_escape_string($password);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("authorization");
	
	$result = mysql_query("select * from users where username = '$username' and password = '$password'")
				or die();//("Помилка".mysql_error());
	$row = mysql_fetch_array($result);
	
	if($row['username'] == $username && $row['password'] == $password ){
		//echo "успішно".$row['username'];
		$_SESSION['username']=$username;
	}else{
		//echo "Помилка";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			if($_SESSION['username']){?>
			<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=../home/home.php">
		<?php
			}
		?>
		<title>Авторизація</title>
		<link rel="shortcut icon" href="../icon1.png">
		
		<link rel='stylesheet' type='text/css' href='lgnstyle.css'>
	</head>
	<body>
		<div id="content">
		<div id="frm">
		<?php 
		if(isset($_POST['user'])&&!$_SESSION['username']){
			?>
			<div class="error_message">Перевірте дані на коректність</div><br>
			<?php
		}
		?>
			<img src="login3.png" alt="альтернативный текст"> 
			<form action="loginpage.php" method="POST">
				
					<p>Логін</p>
					<input type="text" id="user" name="user"  /><!--placeholder="Логін"-->
				
					<p>Пароль</p>
					<input type="password" id="pass" name="pass" />
				
				
					<input type="submit" id="btn" value="Увійти" />
				
			</form>
		</div>
		</div>
	</body>
</html>