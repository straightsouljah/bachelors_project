<?php 
include('index_header.php');

   
?>
<div class="body">
<br  />
<br  />
<form action="login.php" method="post" onsubmit="return formValidator2()" name="loginform" enctype="multipart/form-data">

<table width="20%" border="0" cellpadding="0" align="center">
  <tr>
      <td><font size="+1.8"><b>UserName</b></font></td>
    <td><input type="text" name="user" id="user" title="Please enter your us5ername"></td>
  </tr>
  <tr>
      <td><font size="+1.8"><b>Password</b></font></td>
    <td><input type="password" name="psswd" id="psswd" title="please enter your password"></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td>
	
	<input type="submit" name="Submit" onclick = "return formValidator2()" value="LOGIN">&nbsp;&nbsp;
	
        <input type="reset" name="reset" value="RESET"></td>
  </tr>
 </table>
 </form>
 </div>

<?php 
include('hostel_footer.php');
?>