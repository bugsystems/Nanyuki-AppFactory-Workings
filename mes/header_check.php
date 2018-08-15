<?php
session_start();
if(isset($_SESSION['logged']) && isset($_SESSION['name']))
{
echo "Administrator        : ".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<br>";
echo "<a href='logout.php' style='text-decoration:none;color:blue'>logout&nbsp;&nbsp;&nbsp;</a>";
}
else
{
header('Location:login.php');}

?>
