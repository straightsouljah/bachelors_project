<?php 
include('index_header.php');

   
?>
<div class="body">
<br  />
<br  />
<form action="student_details.php" method="post" onsubmit="return formValidator()" name="indexform" enctype="multipart/form-data">

    <p align="center"><h4 align="center">Please enter your registration number to view your residence details</h4></p>
<table width="20%" border="0" cellpadding="0" align="center">
  
  <tr>
      <td><font size="+1.8"><b>REG NO_:</b></font></td>
    <td><input type="text" name="reg" id="reg" title="Please enter your uername"></td>
  </tr>
 
   <tr>
    <td>&nbsp;</td>
    <td>
	
	<input type="submit" name="Submit" onclick = "return formValidator()" value="submit">&nbsp;&nbsp;
	
        <input type="reset" name="reset" value="reset"></td>
  </tr>
 </table>
 </form>
 </div>

<?php 
include('hostel_footer.php');
?>