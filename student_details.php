<?php 
include('index_header.php');

   
require_once("connection.php");
  //once('update_records.php');require_
  $reg=$_POST['reg'];
  ?>
  <div class="body">

<?php
$data = mysql_query("SELECT s.photo,s.reg_no,n.fname,n.lname,r.room_no,h.hall_name FROM name n inner join student s on n.name_id=s.name_id 
					inner join room r on s.room_id=r.room_id inner join hall h on h.hall_id=r.hall_id where s.reg_no='$reg'");

//Puts it into an array
$file_path = 'uploaded_files/';

while($row = mysql_fetch_assoc( $data ))
{
//Outputs the image and other data
$src=$file_path.$row['photo'];


  
 ?>
  <table width="955" height="127" class="report"cellpadding="2" align="center">

	
	<tr><font color="#330000" style="background-attachment:inherit">
	
	<td width="123"><img src="<?php echo $file_path.$row['photo'];?>" height="150" width="115"></td>
	<td width="155" align="right">
	Reg. Number:<br />
	FIRST NAME:<br />
	LAST NAME:<br />
	Room no_:<br />
    Hall:<br /></td>

	

	
	</font>
  

 <td width="655" align="left" valign="middle" ><b>
 <?php echo $row['reg_no']; ?><br />
<?php echo $row['fname']; ?><br />
<?php echo $row['lname']; ?><br />
<?php echo $row['room_no']; ?><br />
<?php echo $row['hall_name']; ?><br /></b>
 
  
  </td>
 
 </tr>
 
  

 <?php
}
?>
</table>
  </div>
    

<?php 
include('hostel_footer.php');
?>