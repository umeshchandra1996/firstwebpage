<?php
$servername = "localhost";
$username = "root";
$password = "Umesh@1996";
$dbname = "reckannauj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * from register";
$result=$conn->query($sql);



/*mysqli_connect("localhost","root","Umesh@1996");
mysql_select_db("reckannauj");
$query="select * from register";
$res-mysql_query($query);

*/?>

<html>
<head>
</head>
<h1 style="color:green"; align="center"> SHOW ALL RECORD!! </h1>
<table border="1" align ="center">

<tr>

<th>SR.NO.</th>
<th>NAME</th>
<th>F'NAME</th>
<th>GENDER</th>
<th>EMAIL</th>
<th>PASSWORD</th>
</tr>
<?php


if($result-> num_rows>0)
{

	//echo "<td>".$row["id"] ."<td>" . $row["name"] ."<td>". $row["f'name"]."<td>" . $row['a'] ."<td>". $row["email"]."<td>" .$row["password"] ."<br>";
 

 while($row=$result->fetch_array())
  {
   
   echo "<tr>"."<td>".$row["id"];
   echo "<td>".$row['name'];
   echo "<td>".$row['fname'];
   echo "<td>".$row['gender'];
   echo "<td>". $row['email'];
   echo "<td>".$row['password'];

  }
	


}
else
{
	echo "result 0";
}
?>















<tr>

</table>










<body>
</body>

</html>
