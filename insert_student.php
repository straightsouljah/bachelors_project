<?php

include('admin_header.php');

	$reg_no = $_POST['reg'];
	$room = $_POST['room'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	?>
    <div class="body">
    <?php
require_once("connection.php");

$uploaddir = "upload_images/"; // Relative path under webroot

$photo=$_FILES['photo']['name'];

$uploaddir = "uploaded_files/"; // Relative path under webroot

		$uploadfile = $uploaddir . basename($_FILES["photo"]["name"]);
		
		move_uploaded_file($_FILES['photo']['tmp_name'],$uploaddir.$_FILES["photo"]["name"]);

$sql_query = mysql_query("INSERT INTO name(name_id,fname,lname,date) 
							VALUES (NULL,'".$fname."','".$lname."',NOW())");

$name_id=mysql_insert_id();

$sql= mysql_query("SELECT room_id FROM room where room_no = '$room'");
		if (!$sql)
	{
	echo ("an error in your query" . mysql_error()); 
	}

	while($row=mysql_fetch_array($sql)){
 
$query=mysql_query("insert into student(student_id,photo,reg_no,date,name_id,room_id) 
  		VALUES(NULL,'".$photo."','".$reg_no."',NOW(),'".$name_id."','".$row['room_id']."')"); 
		
 }
?>

 <p align="center"> <?php echo $fname." ".$lname;?> Resident student has been successfuly registered</p>
 
 </div>
<?php
include('hostel_footer.php');
 ?>