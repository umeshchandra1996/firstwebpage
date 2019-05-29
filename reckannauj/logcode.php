
<?php
$servername = "localhost";
$username = "root";
$upassword = "Umesh@1996";
$dbname = "reckannauj";

// Create connection
$conn = mysqli_connect($servername, $username, $upassword, $dbname);

?>


<?php
//session_start();
//include ("login.php");
//login();

if(isset($_POST['submit']))
{
$login = trim($_POST['email']);
$password = trim($_POST['password']);
$query = "SELECT * FROM register" ; 
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
while ($query=mysqli_fetch_assoc($result)) {
	print_r($query);
}






/*$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['id']=$row['id'];
 header("Location: profile.php");
 echo 'hi there';
 exit;
  }
else
  {
 echo 'oops  can not do it';
  }
 }*/
?>











