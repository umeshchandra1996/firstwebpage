<?php
session_start();
echo "welcome user";
echo "<br/>";
echo $_SESSION['user'];
if($_SESSION['user']=="")
{
session_destroy();
header("Location:login.php?msg=2");

}
?>
<br/>
<a href="logout.php">LOGOUT</a>