<?php
include('admin_header.php');

  require_once("connection.php");
  //once('update_records.php');require_
  ?>
  <div class="body">
  <table border="1" cellspacing="2" cellpadding="2" align="center">
<tr>

<th><font face="Arial, Helvetica, sans-serif">Hall</font></th>
<th><font face="Arial, Helvetica, sans-serif">Room no_</font></th>
<th><font face="Arial, Helvetica, sans-serif">Room Capacity</font></th>
<th><font face="Arial, Helvetica, sans-serif">Free Beds</font></th>
</tr>
<?php
$data = mysql_query("SELECT s.reg_no,count(s.room_id) as count,r.room_no,r.capacity,h.hall_name FROM student s inner join room r on s.room_id=r.room_id inner join hall h on h.hall_id=r.hall_id group by s.room_id");

//Puts it into an array

while($row = mysql_fetch_assoc($data))
{
  if(($row['capacity']-$row['count'])!=0){
 ?>
    <tr>
<td><?php echo $row['hall_name']; ?></td>
<td><?php echo $row['room_no']; ?></td>
<td><?php echo $row['capacity']; ?></td>
<td><?php echo $row['capacity']-$row['count']; ?></td>
</tr>

    <?php
	 }
	
	} ?>
	</table>
  </div>
    
    <?php
	include('hostel_footer.php');
	?>