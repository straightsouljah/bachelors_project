<?php 

include('admin_header.php');

?>

<div class="body">
<br  />
<form name="registration" method="post" action="insert_hall.php" enctype="multipart/form-data">
<table width="561" border="0" cellspacing="4" cellpadding="2" align="center">
  <tr>
    <td width="135" align="right">Hall Name</td>
    <td width="326"><input name="hall" type="text" size="30"></td>
  </tr>
  <tr>
    <td scope="row" align="right">Number of Rooms</td>
    <td><input name="rooms" type="text" size="30"></td>
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

