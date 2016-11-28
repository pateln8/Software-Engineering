<?php
session_start();
include('db.php');
$username=$_POST['username'];
 
$result = mysqli_query($db,"SELECT * FROM member WHERE username='$username'");
$num_rows = mysqli_num_rows($result);
 
if ($num_rows) {
header("location: index.php?remarks=failed");
}
else
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$birthday=$_POST['birthday'];
$username=$_POST['username'];
$password=$_POST['password'];
$amount=$_POST['amount'];
mysqli_query($db,"INSERT INTO member(fname, lname, address, birthday, username, password, amount)VALUES('$fname', '$lname','$address', '$username', '$password', $amount, '$birthday')");
header("location: index.php?remarks=success");
}
?>