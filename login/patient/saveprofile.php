<?php
session_start();
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 
$firstname = $_SESSION['user'];
$mob = $_SESSION['mob'];
$add =  $_POST['add'];
$alle =  $_POST['alle'];
$idno =  $_POST['idno'];

mysqli_query($conn, "update PROFILE set Address='$add',Allergic_med='$alle',IDcard_No='$idno' WHERE First_name IN ('$firstname') AND MobileNO IN ('$mob')");
header("Location: ../index.php");
mysqli_close($conn);
exit;
?>