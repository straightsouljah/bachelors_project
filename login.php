<?php
ob_start();
require_once("connection.php");
// Define $myusername and $mypassword
$myusername=$_POST['user'];
$mypassword=$_POST['psswd'];

// To protect MySQL injection 
$Username = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$Username = mysql_real_escape_string($myusername);
$Password = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM users WHERE user_name='".$myusername."' and password='".$mypassword."'";
if (!$sql)
{
	echo ("an error in your query" . mysql_error()); 
}
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

while($row=mysql_fetch_array($result)){

if($row['account_type']=="admin"){
	
        // Register $myusername, $mypassword and redirect to file "admin_home.php"
        session_register("admin");
        session_register("user_name");
		session_register("psswd");
		$_SESSION['user_name']=$Username;
		$_SESSION['psswd']=$mypassword;
		//header("location:home.php");
		header("location:admin_header.php");
		
		}
	}

}
else {
header("location:index.php");

}

ob_end_flush();
?>
