<?php
session_start();
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 
$mob = $_SESSION['mob'];
$idtype =  $_POST['idtype'];
$idno =  $_POST['idno'];
$reg =  $_POST['reg'];
$spec =  $_POST['spec'];

mysqli_query($conn, "insert into doccon(phoneno,idtype,idno,regno,speci) values('$mob','$idtype','$idno','$reg','$spec') ");
header("Location: ../index.php");
mysqli_close($conn);
exit;
?>