<?php
include('admin_header.php');
?>
<div class="body">
<?php
require_once("connection.php");



//Condition to determine wheteher password and confirmpassword match 
//if($_POST['Password'] == $_POST['confirm_password'])
//{

	$hall = $_POST['hall'];
	$room_no = $_POST['room'];
	$beds = $_POST['beds'];
	//String to hold the MYSQL query
	$sql= mysql_query("SELECT hall_id FROM hall where hall_name = '$hall'");
		if (!$sql)
	{
	echo ("an error in your query" . mysql_error()); 
	}

	while($row=mysql_fetch_array($sql)){
	
	$sql_query = mysql_query("INSERT INTO room(room_id,room_no,capacity,date,hall_id) 
							VALUES (NULL,'".$room_no."','".$beds."',NOW(),'".$row['hall_id']."')");
	if(!$sql_query){
		echo "you have an error in yoour query". mysql_error();
		}
	}
	?>
 <p align="center"> Room number <?php echo $room_no;?> hall has been successfuly registered</p>
 

</div>
<?php
include('hostel_footer.php');
 ?>