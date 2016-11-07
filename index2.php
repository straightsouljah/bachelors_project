<?php 
include('Header.php');
?>
<div class="body">
<br  />
<br  />
<h3 align="center">Please enter your username and password if you already have an account or see the administrator to create one </h3>
<form action="login.php" method="post" name="indexform" enctype="multipart/form-data">

<table width="20%" border="0" cellpadding="0" align="center">
  <tr>
      <td><font size="+1.8"><b>UserName</b></font></td>
    <td><input type="text" name="user" title="Please enter your uername"></td>
  </tr>
  <tr>
      <td><font size="+1.8"><b>Password</b></font></td>
    <td><input type="password" name="psswd" title="please enter your password"></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="LOGIN">&nbsp;&nbsp;
        <input type="reset" name="reset" value="RESET"></td>
  </tr>
 </table>
 
 </form>
 <h4 align="center"><font color="#FF0000"><?php echo "Wrong Username or Password"; ?></font></h4>
 </div>

<?php 
include('Prison_footer.php');
?>
