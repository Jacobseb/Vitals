<?php
session_start();
$med = $_POST['medicinesearch'];
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 
$result = mysqli_query($conn, "SELECT
									*
								FROM
									MEDICINE_MASTER
								WHERE
								    Purpose IN ('$med');");
while ($row = mysqli_fetch_array($result))
{
	$_SESSION['medicinename']=$row['Medicine_Name'];
	echo $_SESSION['medicinename'];
}
mysqli_close($conn);
?>