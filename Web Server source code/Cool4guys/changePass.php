<!DOCTYPE html>
<!-- FORM FOR CHANGING PASSWORD  -->
<?php
$activePage = "changePass";
session_start();
?>

<html>
    <head>
        <title></title>
    </head>
    <header>
	<?php include("include/navigation.php");?>
    </header>
    <body>
<div class="maincontent">
<form name="changepass" action="dochangePass.php" method="post">
<table align="center">
<tr height="50">
<td>New Password :</td>
<td><input type="password" name="newpass" id="newpass"></td>
</tr>
<tr height="50">
<td>Confirm Password :</td>
<td><input type="password" name="confpass" id="confpass"></td>
</tr>
<tr>
<td><input type="submit" name="Submit" value="Change Password" /></td>
</tr>
 </table>
</form>
</div>
    </body>
<?php include("include/footer.php");?>
</html>

