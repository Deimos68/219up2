<?php
require_once("init.php");

$fname=$_GET("fname");
$otch=$_GET("otch");
$lname=$_GET("lname");
$date_r=$_GET("date_r");
$tel=$_GET("tel");

$sql = "insert students(fam,name,otch,date_r,tel,city_id,group_id)
values ('$lname','$fname','$otch','$date_r','$tel',l,l)";
$result = mysql_query($db_handler,$sql) or die ("Невозможно выполнить");
echo "<h1>Выполнено!</h1>";
?>