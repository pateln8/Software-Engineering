<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>Student Profile</title>
	</head>
	<body>
		<h1 align='center'>Welcome <?php echo $loggedin_session; ?>,</h1>
		<!-- <p align='center'> You are now logged in. you can logout by clicking on signout link given below.</p> -->
		<div id="contentbox">
		<?php
		include('db.php');
		$sql="SELECT * FROM member where mem_id=$loggedin_id";
		$result=mysqli_query($db,$sql);
		?>
		<?php
		while($rows=mysqli_fetch_array($result)){
		?>
		<div id="signup" style="float:left;">
		<div id="signup-st">
		<form action="" method="POST" id="signin" id="reg">
		<div id="reg-head" class="headrg">Your Profile</div>
		<table border="0" align="center" cellpadding="2" cellspacing="0">
		<tr id="lg-1">
		<td class="tl-1"><div align="left" id="tb-name">Reg id:</div></td>
		<td class="tl-4"><?php echo $rows['mem_id']; ?></td>
		</tr>
		<tr id="lg-1">
		<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
		<td class="tl-4"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
		</tr>
		<tr id="lg-1">
		<td class="tl-1"><div align="left" id="tb-name">Birth Date:</div></td>
		<td class="tl-4"><?php echo $rows['birthday']; ?></td>
		</tr>
		<tr id="lg-1">
		<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
		<td class="tl-4"><?php echo $rows['address']; ?></td>
		</tr>
		<tr id="lg-1">
		<td class="tl-1"><div align="left" id="tb-name">Amount</div></td>
		<td class="tl-4"><?php echo $rows['amount']; if($rows['amount']<2) echo '<font color="red" size="4px">Your Balance is low please recharge soon before the balance gets 0.</div>';?></td>
		</tr>
		</table>
		</form>
		</div>
		</div>
		<div id="login" style="float:right;">
		<div id="login-sg">
		<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
		<div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
		</div>
		</div>
		<?php
		// close while loop
		}
		?>
		</div>
		</div>
		</div>
		<?php
		// close connection;
		mysqli_close($db);
		?>
		</br>
	</body>
</html>