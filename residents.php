<?php
include('admin_header.php');

  require_once("connection.php");
  //once('update_records.php');require_
  ?>
  <div class="body">
  <table border="1" cellspacing="2" cellpadding="2" align="center">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Reg. Number</font></th>
<th><font face="Arial, Helvetica, sans-serif">FirstName</font></th>
<th><font face="Arial, Helvetica, sans-serif">LastName</font></th>
<th><font face="Arial, Helvetica, sans-serif">Room no_</font></th>
<th><font face="Arial, Helvetica, sans-serif">Hall</font></th>
<th><font face="Arial, Helvetica, sans-serif">Photo</font></th>
</tr>
<?php
$data = mysql_query("SELECT s.photo,s.reg_no,n.fname,n.lname,r.room_no,h.hall_name FROM name n inner join student s on n.name_id=s.name_id 
					inner join room r on s.room_id=r.room_id inner join hall h on h.hall_id=r.hall_id");

//Puts it into an array
$file_path = 'uploaded_files/';

while($row = mysql_fetch_assoc( $data ))
{
//Outputs the image and other data
$src=$file_path.$row['photo'];


  
 ?>
    <tr>
<td><?php echo $row['reg_no']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['room_no']; ?></td>
<td><?php echo $row['hall_name']; ?></td>
<td><img src="<?php echo $file_path.$row['photo'];?>" height="100" width="100"></td>
</tr>

    <?php } ?>
	</table>
  </div>
    
    <?php
	include('hostel_footer.php');
	?>