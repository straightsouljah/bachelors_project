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
	$no_rooms = $_POST['rooms'];
	//String to hold the MYSQL query
	$sql_query = mysql_query("INSERT INTO hall(hall_id,hall_name,no_of_rooms,date) 
							VALUES (NULL,'".$hall."','".$no_rooms."',NOW())");
	if(!$sql_query){
		echo "you have an error in yoour query". mysql_error();
		}
	
	?>
 <p align="center"> <?php echo $hall;?> hall has been successfuly registered</p>
 

</div>
<?php
include('hostel_footer.php');
 ?>