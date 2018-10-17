 <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
         
          
          <p class="section-description"></p>
        </div>
      </div>
	  <form action="" method="post">
	                           <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="form_name">MEDICINE NAME</label>
                                        <input id="form_name" type="text" name="med" class="form-control" placeholder="medicine name" value=" <?php if(isset($_POST['med'])) 
										{ echo $_POST['med'];
										}?>" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="form_lastname">LOCATION PINCODE</label>
                                        <input id="manu" type="text" onchange="mmyFunction()" name="pin" class="form-control" value="<?php echo $_SESSION['pin'] ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
									
								<div class="col-md-12">
								  <input type="submit" class="btn btn-success btn-send" value="Search">
                                </div>
								
								
                            </div>
							
							</form>
							<br>
							<br>
							<?php
								if(isset($_POST['med']))
								{
$_SESSION['med']=$_POST['med'];							
$med=$_POST['med'];
$med = str_replace(' ', '', $med);
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
									    and p.PINCODE IN ('$pin')
									    AND   Quantity NOT IN ('0');");
										

										
echo "<table>
  <tr>
    <th>STORE NAME</th>
    <th>ADDRESS</th>
    <th>PINCODE</th>
	<th>LOCATION</th>
  </tr>";
  $map="https://www.google.co.in/maps/place/Puthenkurish,+Kochi,+Kerala+682308/@9.9751533,76.4021828,14z/data=!3m1!4b1!4m5!3m4!1s0x3b087530d2e5d557:0x5a96a8b2406e4a60!8m2!3d9.9773705!4d76.4115587";
							if($result->num_rows !== 0)
							{
							while ($row = mysqli_fetch_array($result))
						{
    						echo "<tr>
    <td>".$row['First_name']."</td>
    <td>".
    						$row['Address']."</td>
    <td>".
    						$row['Pincode']."</td>
    <td>".
							"<a href=\"".$map."\"target=\"_blank\">"."Click Me"."</a>"."</td>
  </tr>";
						}	
							}
							else {
								echo "No Record Found";
							}
								
		echo "</table>";
	mysqli_close($conn);
							}
						?><br><br><br><br><br><br><br><br>