<?php
include('admin_header.php');
?>
<div class="body">
<?php
require_once("connection.php");



//Condition to determine wheteher password and confirmpassword match 
//if($_POST['Password'] == $_POST['confirm_password'])
//{
	$password = $_POST['Password'];
	//String to hold the MYSQL query
	$sql_query = mysql_query("INSERT INTO users(users_id,fname,lname,user_name,password,account_type,date) VALUES (NULL, '".$_POST['F_name']."', '".$_POST['L_name']."','".$_POST['Username']."', '".$password."','".$_POST['account_type']."', NOW())");
	if(!$sql_query){
		echo "you have an error in yoour query". mysql_error();
		}
	
	$query = mysql_query("SELECT fname,lname FROM users WHERE users_id = '".mysql_insert_id()."' ") or die(mysql_error());
 
 $result1=mysql_num_rows($query);
if($result1==0){ echo "No results were found".$query . mysql_error(); exit;}    

while($row=mysql_fetch_array($query)){



 ?>
 <p align="center">The account for <?php echo ($row["fname"] ." ". $row["lname"]);?> has been successfuly created</p>
 
 <?php
 	}// end while loop
/*} // end if 
else 
{	
	echo $msg = "Password fields dont match";
	
	header(sprintf("Location:registration2.php?msg=".$msg));
}
*/
?>
</div>
<?php
include('hostel_footer.php');
 ?>