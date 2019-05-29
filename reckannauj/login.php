<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
echo "Invalid username or password";
}
if($msg==2)
{
echo "Pagal samjha hai--- kya pehle login Kro!!!!";
}
if($msg==3)
{
echo "Logout Sucessfully";
}
?>
<h1 style="color:green;">Login Here!!</h1>
<form action="logcode.php" method="post">
Email
<input type="email" name="email"/>
<br/>
<br/>
Password
<input type="password" name="password"/>
<br/>
<br/>
<input type="submit" value="Login"/>
</form>

