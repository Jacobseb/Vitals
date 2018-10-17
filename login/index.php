<?php
session_start();
$_SESSION['flag']=1;
if(isset($_GET['user']))
{
$_SESSION['user']=$_GET['user'];
}
?>
<?php
$conn = new mysqli("localhost", "user", "user","db1");
if ($conn->connect_error) {
    die("Connection failed");
} 	
	$mob=$_SESSION['mobile'];
	$username=$_SESSION['user'];
	$result = mysqli_query($conn, "SELECT * FROM PROFILE
    WHERE First_name IN ('$username') AND MobileNO IN ('$mob')");
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Vitals</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
 <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
           <img class="" src="img/logo.png" width="110" height="100" alt="Vitals">
        </div>

        <h1>Vitals</h1>
              </div>
    </div>
  </section>
  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

     <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo2.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
      
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <!--<li class="menu-active"><a href="#hero">Home</a></li>-->
         <!-- <li><a href="#patient">Patient</a></li>
          <li><a href="#doctor">Doctor</a></li>
         -->
		 <li>
		  <div class="col-md-4 service-item">
		<h3> <div class="service-icon"><i class="fa fa-search"></i>&nbsp;&nbsp;</div></li></h3>
		
		 <li>
		 <form action="findmed.php" method="post" >
		 <div class="col-md-12">
                                    <div class="form-group">
                                        <!--<label for="form_name">Firstname *</label>-->
                                        <input id="form_name" style="height:34px; width:300px" type="text" name="medicinesearch" class="form-control" placeholder="Find a Medicine" required="required" data-error="Required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
		</form>					

			</li>
          <li class="menu-has-children"><a href="#patient">Patient</a>
            <ul>
              <li class="menu-has-children"><a href="#patient">Profiles</a>
                <ul>
                  <?php 
						$mobileno=$_SESSION['mobile'];
						$conn = new mysqli("localhost", "user", "user","db1");
						if ($conn->connect_error) 
						{
							die("Connection failed");
						} 
						$result = mysqli_query($conn, "SELECT * FROM PROFILE
						WHERE MobileNo IN ('$mobileno')");
						while ($row = mysqli_fetch_array($result))
						{
							
						$fname = $row['First_name'];
						echo "<li><a href=\"index.php?user=".$fname."\">".$fname ."</a></li>";
						}
						mysqli_close($conn);
					?>
					<li><a href="index.php?adduser=1">Add New Profile</a></li>
                </ul>
              </li>
             <!-- <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>-->
            </ul>
          </li>
		  <li><a href="#doctor">Doctor</a></li>
          <li><a href="#medicine">Medical Shop</a></li>
		  <li><a href="../">Sign Out &nbsp<?php echo "(".$username.")" ?></a></li>
		  <!--<li><a href="#signin">Sign in</a></li>
		  <li><a href="#contact">Sign up</a></li>-->
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->
  
  <!--========================
  new patient profile
   =================-->
   <?php
   if(isset($_GET['adduser']))
   {
	   if($_GET['adduser'] == 1)
	   {
   include "adduser.php";
	   }
   }
   ?>

  <!--==========================
  Patient Section
  ============================-->
  <section id="patient">
  <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Patient</h3>
          <div class="section-title-divider"></div>
          <!--<p class="section-description">Vitals is a place where a persons vital needs are delivered</p>-->
        </div>
      </div>
    </div>
  
    <div class="container about-container wow fadeInUp">
      <div class="row">
       <!-- <div class="col-md-6 col-md-push-6 about-content">-->
           <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-user"></i></div>
          <h4 class="service-title"><a href="index.php?value=1">Profile</a></h4>
          <p class="service-description">User Details</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-folder-open-o"></i></div>
          <h4 class="service-title"><a href="index.php?value=2">Prescriptions</a></h4>
          <p class="service-description">Medicenes Needed for the patient</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-search"></i></div>
          <h4 class="service-title"><a href="index.php?value=3">Find a medical store</a></h4>
          <p class="service-description">Find store where the required medicine is available</p>
		   <br>
		   </div>
		

			<div class="col-md-4 service-item">
          <?php
		  
		  if(isset($_GET['value']))
		  {
		  if($_GET['value']=='1')
		  {
			 include "patient/profile.php";
		
		  }
		  else if($_GET['value']=='2')
		  {
			 include "patient/prescriptions.php";
	
		  }
		  else if($_GET['value']=='3')
		  {
			 include "patient/findstore.php";

		  }
		  else if($_GET['value']=='4')
		  {
			 include "patient/editprofile.php";
	
		  }
		  }
		  else
		  {
			  if(!isset($_GET['adduser']))
			  {
			  include "patient/profile.php";
			  }
		  }
		  ?>
		</div>
        </div>
      </div>
    </div>
  </section>
 <br>
 <br>
 <br>
  <br>
 <br>

 
  <!--==========================
  Doctor Section
  ============================-->
  <section id="doctor">
   <?php 
	include "doctor.php";
	?>
	<br>
	<br>
	<br>
	<br>
	<br><br>
	<br><br><br>
	<br><br><br>
  </section>


  

  <!--==========================
  Medical Shop Section
  ============================-->
  <section id="medicine">
  <?php
 	include "medicalstore.php";
	?>
	<br>
	<br>
	<br>
    
  </section>
  
  <!--==========================
  Footer
============================-->
<br>
<br>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            
          </div>
          <div class="credits">
            
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


  <script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("jacob").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x))  {
        text = "Input not valid";
        alert("not a valid phone number");
        document.getElementById("jacob").value='';
    } 
    else
    {
    document.getElementById("jacob").innerHTML = '';
    
    }
}
</script>
</body>

</html>
