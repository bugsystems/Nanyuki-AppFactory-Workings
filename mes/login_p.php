<?php
include "connect.php";
session_start()
;
$email=$_POST['email'];
$password=$_POST['pass'];
$sql=mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND pass='$password'")or die(mysqli_error());

$count=mysqli_num_rows($sql);

if($count!=0)
{
$row=mysqli_fetch_array($sql);
$_SESSION['name']=$row['name'];
$_SESSION['email']=$row['email'];
$_SESSION['logged']=true;
header('Location:index.php');
}
else
{
header('Location:wrong_login.php');
}

?>
