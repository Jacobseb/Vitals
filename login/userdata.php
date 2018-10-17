<?php
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 
	$username=$_SESSION['user'];
	$result = mysqli_query($conn, "SELECT * FROM PROFILE
    WHERE First_name IN ('$username')");
	while ($row = mysqli_fetch_array($result))
{
	$_SESSION['pin']=$row['Pincode'];
	$_SESSION['mob']=$row['MobileNo'];
    $_SESSION['fname']=$row['First_name'];
    $_SESSION['sname']=$row['Second_name'];
	$_SESSION['add']=$row['Address'];
    $_SESSION['ptype']=$row['Profile_type'];
	$_SESSION['mail']=$row['Email'];
    $_SESSION['amed']=$row['Allergic_med'];
	$_SESSION['idno']=$row['IDcard_No'];
mysqli_close($conn);
}
?>