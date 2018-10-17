<?php
$mob=$_SESSION['mobile'];
$user=$_SESSION['user'];
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 
$result = mysqli_query($conn, "SELECT * FROM PROFILE
    WHERE MobileNo IN ('$mob') AND First_name LIKE ('%$user%')");

while ($row = mysqli_fetch_array($result))
{
	if($row['Profile_type']=='Medicals')
	{include "medicalstore/medicalstore2.php";}
	else
	{include "medicalstore/medicalstore1.php";}
break;
}
mysqli_close($conn);
?>
