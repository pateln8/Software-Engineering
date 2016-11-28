<?php
include "logincheck.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Student Profile</title>
</head>
<body>

<div id="login">
<div id="login-st">
<form action="" method="POST" id="signin" id="reg">
  <?php
  $remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
   if ($remarks==null and $remarks=="")
{
  echo '<div id="reg-head" class="headrg">Login Here</div>';
    }
   if ($remarks=='failed')
{
  echo '<div id="reg-head-fail" class="headrg">Login Failed!, Invalid Credentials</div>';
    }
?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
 <tr id="lg-1">
    <td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
    <td><input type="text" id="tb-box" name="username" /></td>
  </tr>
 <tr id="lg-1">
    <td class="tl-1"><div align="left" id="tb-name">Password:</div></td>
    <td><input id="tb-box" type="password" name="password" /></td>
  </tr>
</table>
    <div><a href='reset-pwd-req.php' style="color:#4cb292;margin-left:30px;">Forgot Password?</a></div>
    <div id="st"><input name="submit" type="submit" value="Sign In" id="st-btn"/></div>
    <div id="st"><input name="SignUp" type="button" value="Sign Up" id="st-btn" onclick="location.href = 'signup.php';"/></div>
</form>
</div>
</div>
</body>
</html>