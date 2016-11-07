<?php
session_start(); //Start the session
define(USER,$_SESSION['user_name']); //Get the user name from the previously registered super global variable
if(!session_is_registered("admin")){ //If session not registered
header("location:login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );

     
?>
<html>
<head>

<title>Header</title>
<link  rel="stylesheet" type="text/css" href="Hostel_css.css" />
<script type="text/javascript" src="validation.js"></script>

</head>

<body>

<div id="header" align="center">
<table width="200" border="0" align="center">
  <tr>
    <td><img src="header-image.jpg"></td>
  </tr>

	
	
<tr>
    <td>
<a class="main-links" href="resident_registration.php">ADD STUDENT</a>&nbsp;
<a class="main-links" href="residents.php">VIEW RESIDENTS</a>&nbsp;
<a class="main-links" href="hall_registration.php">ADD HALL</a>&nbsp;
<a class="main-links" href="room_registration.php">ROOMS</a>&nbsp;
<a class="main-links" href="search_rooms.php">FREE ROOMS</a>&nbsp;
<a class="main-links" href="CUSTODIAN_registration.php">CUSTODIAN </a>&nbsp;
<a class="main-links" href="logout.php"><input type="button" align="right" value="LOGOUT" style="background-color:#FFFFFF" onClick="return confirm('are you sure you want to logout?');"></a>
</td></tr>
</table>
</div>
