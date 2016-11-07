<?php 

include('admin_header.php');

?>

<div class="body">
<br  />
<h4 align="center"> <b> Please enter the details of the user for which an Account is to be created</b></h4>
<form name="registration" method="post" action="insert_reg.php"enctype="multipart/form-data">
<table width="561" border="0" cellspacing="4" cellpadding="2" align="center">
  <tr>
    <td width="135" align="right">First name</td>
    <td width="326"><input name="F_name" id="F_name" type="text" size="30"></td>
  </tr>
  <tr>
    <td scope="row" align="right">Last name</td>
    <td><input name="L_name" id="L_name" type="text" size="30"></td>
  </tr>
  
  
  <tr>
    <td align="right">Username</td>
    <td><input type="text" name="Username" id="Username" value=""size="30" ></td>
  </tr>
  <tr>
    <td align="right">Password</td>
    <td><input type="password" name="Password"  value="" id="password" size="30" /></td>
  </tr>
  
  <tr>
    <td align="right">Verify Password</td>
    <td><input type="password" name="Password2" value="" id="password2" size="30" /></td>
  </tr>

  <tr>
    <td align="right">&nbsp;</td>
    <td><input type="hidden" name="account_type" value="admin" id="admin" size="30" />
		 </td>
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

