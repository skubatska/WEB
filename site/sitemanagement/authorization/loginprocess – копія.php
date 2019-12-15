<?php
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
				or die("Помилка".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password ){
		echo "успішно".$row['username'];
		$_SESSION['username']=$username;
	}else{
		echo "Помилка";
	}
	if($_SESSION['username']){
		?>
		<html>
		<head>
			<meta HTTP-EQUIV="REFRESH" CONTENT="0; URL=../home/home.php">
		</head>
		<body></body>
		</html>
		<?php
	}
?>