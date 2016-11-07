<?php 

include('admin_header.php');
include('connection.php');

?>

<div class="body">
<br  />
<form name="registration" method="post" action="insert_student.php" enctype="multipart/form-data">
<table width="561" border="0" cellspacing="4" cellpadding="2" align="center">
   
   <tr>
    <td width="135" align="right">First name</td>
    <td width="326"><input name="fname" type="text" size="30"></td>
  </tr>
  <tr>
    <td scope="row" align="right">Last name</td>
    <td><input name="lname" type="text" size="30"></td>
  </tr>
   <tr>
    <td width="135" align="right">Select Room</td>
    
    <td width="326"><select id="Education_level"  name="room" >
   					 <option value="select hall name" selected="selected">......select room number....</option>
    <?php 
	$sql="SELECT * FROM room";
		if (!$sql)
	{
	echo ("an error in your query" . mysql_error()); 
	}
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);


	while($row=mysql_fetch_array($result)){
?>
                   <option value="<?php echo $row['room_no'];?>"><?php echo $row['room_no'];?></option>
                                  <?php }?>
   </td> 
  </tr> 
   
  <tr>
    <td width="135" align="right">Registration Number</td>
    <td width="326"><input name="reg" type="text" size="30"></td>
  </tr>
  <tr>
    <td scope="row" align="right">Photo</td>
    <td><input type="file" name="photo" /></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input name="Submit" type="submit" value="Submit" />&nbsp;<input name="reset" type="reset" value="reset" /></td>
  </tr>
</table>

</form>
</div>
<?php
include('hostel_footer.php');
 ?>