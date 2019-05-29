<?php
$n=$_POST['name'];
//echo $n;
$fn=$_POST['fname'];
//echo $fn;
$g=$_POST['a'];
//echo $g;
$e=$_POST['email'];
//echo $e;
$p=$_POST['password'];
//echo $p;

$servername ="localhost";
$username ="root";
$password="Umesh@1996";
$db_name="reckannauj";


$conn = new mysqli($servername, $username, $password,$db_name);
//$conn= mysqli_connect('localhost','root','Umesh@1996');
if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);

}
//echo'<p>connected successfully</p>'

//mysqli_select_db("reckannauj");
$sql="INSERT INTO register (name,fname,gender,email,password) VALUES ('$n','$fn','$g','$e','$p')";


//mysqli_query($query);
//echo "thanks"
if($conn->query($sql) === TRUE)
{
 //echo "New record created successfully";
 //mysqli_query($query);
}
else
{
echo "Error: ".$sql . "<br>" . $conn->error;
}
$conn->close();

header("Location:login.php");


?>

