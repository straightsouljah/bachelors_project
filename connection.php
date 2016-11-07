<?php
$host= "localhost";
$user= "root";
$password="root";
$db = "datawarehouse";

$con = mysql_connect('localhost','root','root');
$sql = mysql_select_db($db,$con);

?>