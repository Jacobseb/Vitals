  <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"></h3>
        
          <p class="section-description"> </p>
		 
		 
        </div>
      </div>
<?php

$_SESSION['flag']=1;
if(isset($_GET['user']))
{
$_SESSION['user']=$_GET['user'];
}
?>
<table>
  <tr>
    <th>MEDICINES</th>
    <th>DOCTOR</th>
    <th>DOSAGE</th>
	<th>QUANTITY</th>
  </tr>
<?php
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 
	$username=$_SESSION['user'];
	$mob = (int)$_SESSION['mob'];
	$result = mysqli_query($conn, "SELECT * FROM USER_PRESCRIPTION  WHERE PATIENT_ID = $mob AND  PATIENT_NAME  IN ('$username')");
	while ($row = mysqli_fetch_array($result))
{
	echo "<tr>
    <td>".$row['MEDICINES']."</td>
    <td>".$row['DOCTOR_NAME']."</td>
    <td>".$row['DOSAGE']."</td>
	<td>".$row['QUANTITY']."</td>
  </tr>";
mysqli_close($conn);
}
?>
 </table>
 <br><br><br><br><br><br><br><br><br>
