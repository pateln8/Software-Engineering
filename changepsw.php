<div id="code">
<div id="code-st"><?php
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username=mysqli_real_escape_string($db,$_POST['mem_id']);
	$password=mysqli_real_escape_string($db,$_POST['new_psw']);
	$result = mysqli_query($db,"SELECT * FROM member");
	$c_rows = mysqli_num_rows($result);
	if ($c_rows!=$username) {
	header("location: index.php");
	}
	$sql="UPDATE member SET password='$password' WHERE mem_id=$username";
	if(mysqli_query($db,$sql))
	{
		echo "<font color:green> Password has been Change successfully.";
		echo " <a href='index.php'>Go Back</a>";
	}
}
?>