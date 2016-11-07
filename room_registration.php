<?php 

include('admin_header.php');
include('connection.php');

?>

<div class="body">
<br  />
<form name="registration" method="post" action="insert_room.php" enctype="multipart/form-data">
<table width="561" border="0" cellspacing="4" cellpadding="2" align="center">
   <tr>
    <td width="135" align="right">Select Hall</td>
    
    <td width="326"><select id="Education_level"  name="hall" >
   					 <option value="select hall name" selected="selected">......select hall name....</option>
    <?php 
	$sql="SELECT * FROM hall";
		if (!$sql)
	{
	echo ("an error in your query" . mysql_error()); 
	}
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);


	while($row=mysql_fetch_array($result)){
?>
                   <option value="<?php echo $row['hall_name'];?>" ><?php echo $row['hall_name'];?></option>
                                  <?php }?>
   </td>
  </tr>
  
  <tr>
    <td width="135" align="right">Room Number</td>
    <td width="326"><input name="room" type="text" size="30"></td>
  </tr>
  <tr>
    <td scope="row" align="right">Number of Beds</td>
    <td><input name="beds" type="text" size="30"></td>
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