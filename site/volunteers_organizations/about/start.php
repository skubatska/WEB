<?php
define("HOST","localhost");
define("USER","root");
define("PASSWORD","");
define("DB","volunteer_organization");
$db=mysql_connect(HOST,USER,PASSWORD);
if(!$db){echo"Немає звязку з хостом";}
$open_db=mysql_select_db(DB,$db);
if(!$open_db){echo"Немає звязку з БД";}
mysql_query("SET NAMES 'UTF8'");
?>