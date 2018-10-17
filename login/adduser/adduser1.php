<?php
session_start();
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 
$fname = $_POST['name'];
$mob = $_SESSION['mob'];
$sname =  $_POST['surname'];
$mail =  $_POST['email'];
$idno =  $_POST['idno'];
$alergic =  $_POST['alergic'];

mysqli_query($conn, "insert into PROFILE(MobileNo,First_name,Second_name,Profile_type,Email,Allergic_med,IDcard_No) values('$mob','$fname','$sname','Patient','$mail','$alergic','$idno') ");
header("Location: ../index.php");
mysqli_close($conn);
exit;
?>