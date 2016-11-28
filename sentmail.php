<div id="code">
<div id="code-st"><?php
include("db.php");
require_once("class.phpmailer.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username=mysqli_real_escape_string($db,$_POST['userid']);
	$birthday=mysqli_real_escape_string($db,$_POST['birthday']);
	$result = mysqli_query($db,"SELECT * FROM member");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows!=$username) {
	header("location: index.php");
	}
	$sql="SELECT mem_id FROM member WHERE username='$username' and birthday='$birthday'";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$mid=$row['mem_id'];
	$active=$row['active'];
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		// $mailer = new PHPMailer();
		// $mailer->CharSet = 'utf-8';
        
  //       $mailer->AddAddress($email,$row['address']);
        
  //       $mailer->Subject = "Your reset password request at Student Account"

  //       $mailer->From = $row['address']
        
  //       $link = "http://localhost/project/changePassword.php?uid=$mid;"

  //       $mailer->Body ="Hello ".$row['username']."\r\n\r\n".
  //       "There was a request to reset your password at Student Account \r\n".
  //       "Please click the link below to complete the request: \r\n".$link."\r\n".
  //       "Regards,\r\n".
  //       "Webmaster\r\n".
  //       // $this->sitename;
        
  //       if(!$mailer->Send())
  //       {
  //           return false;
  //       }
  //       return true;

		header("location: changePassword.php?uid=$mid");
	}
}
?>