<!DOCTYPE html>

<html>

<head>

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Student</title>
</head>
<body>

<div id="login">
<div id="login-st">
  <form action="sentmail.php" method="POST" id="signin" id="reg">
   <div id="reg-head" class="headrg">Request to Reset Password</div>

    <table border="0" align="center" cellpadding="2" cellspacing="0">
      <tr>
        <td class="tl-1"><div align="left" id="tb-name">UserID:</div></td>
        <td><input type="text" id="tb-box" name="userid" /></td>
      </tr>
      <tr>
        <td class="tl-1"><div align="left" id="tb-name">Enter Birthday:</div></td>
        <td><input type="date" id="tb-box" name="birthday" /></td>
      </tr>
    </table>
    <div id="st"><input name="submit" type="submit" value="Reset Password" id="st-btn"/></div>
  </form>

</div>
</div>
</body>
</html>