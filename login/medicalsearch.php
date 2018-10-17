<?php
$med=$_POST['med'];
$pin=$_POST['pin'];
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 
$result = mysqli_query($conn, "SELECT distinct
									p.First_name,p.LocalURL,p.Address, p.Pincode
								FROM
									PROFILE p,
									MEDICINE_STOCK  m
								WHERE
								    p.First_name= m.Medical_store_Name
								    AND   Medicine_Name IN ('$med')
								    AND p.PINCODE IN ('$pin')
								    AND   Quantity NOT IN ('0');");
while ($row = mysqli_fetch_array($result))
		{
		$_SESSION['medicalname']=$row['First_name'];
		$_SESSION['medicaladd']=$row['Address'];
		$_SESSION['medicalpin']=$row['Pincode'];
		$_SESSION['medicalmail']=$row['Email'];
		$_SESSION['medicalurl']=$row['LocalURL'];
		}									
include "#";
mysqli_close($conn);
?>