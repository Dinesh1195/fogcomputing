<?php
include("include/protect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php include("include/title.php"); ?></title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
     <script language="javascript">
      function validate()
            {
			  
                if (document.form1.name.value == "")
                {
                    alert("Enter the Name");
                    document.form1.name.focus();
                    return false;
                }
				if (document.form1.speciality.value == "")
                {
                    alert("Enter the Speciality");
                    document.form1.speciality.focus();
                    return false;
                }
				 if (document.form1.email.value == "")
                {
                    alert("Enter the E-mail");
                    document.form1.email.focus();
                    return false;
                }
				if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.form1.email.value))  
				  {  
					//return (true)  
				  }  
				  else
				  {
					alert("You have entered an invalid email address!");
					document.form1.email.select();
					return false; 
				  }
                if (document.form1.mobile.value == "")
                {
                    alert("Enter the Contact No.");
                    document.form1.mobile.focus();
                    return false;
                }
				if (isNaN(document.form1.mobile.value))
                {
                    alert("Invalid Contact No.");
                    document.form1.mobile.select();
                    return false;
                }
				if (document.form1.mobile.value.length != 10)
                {
                    alert("10 digists only allowed!!");
                    document.form1.mobile.select();
                    return false;
                }
				return true;
				}
				</script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
			  	<div class="col-md-12">
				   <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
				    </div>
				    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class="active"><a href="adminhome.php">Home</a></li>
				        <li class=""><a href="viewstaff.php">Staff</a></li>
						<li class=""><a href="viewdoctor.php">Doctor</a></li>
				        <li class=""><a href="viewpatient.php">Patient</a></li>
						<li class=""><a href="logout.php">Logout</a></li>
				      </ul>
				    </div>
				</div>
			  </div>
			</nav>
			
		</div>
	</section>
	<!--/ banner-->
	<!--service-->

	<!--cta-->
	<!--contact-->
	<section id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="ser-title">Admin</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-4 col-sm-4">
			      <!--<h3></h3>-->
			      <div class="space"><img src="img/imgdages.jpg" width="250" height="190"></div>
			     
			      
			    </div>
				<div class="col-md-8 col-sm-8 marb20">
					<div class="contact-info">
							<h3 class="cnt-ttl">Doctor Information</h3>
							<div class="space"></div>
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
							<?php

include("include/dbconnect.php");
include("email.php");
extract($_POST);
$msg="";
if(isset($btn))
{
$mq=mysql_query("select * from md_doctor");
$mr=mysql_num_rows($mq);
$id=$mr+1;
$uname="D".$id;
$pass=rand(1000,9999);

$ins=mysql_query("insert into md_doctor(name,speciality,mobile,email,uname,pass,public_key,private_key) values('$name','$speciality','$mobile','$email','$uname','$pass','','')");
	if($ins)
	{
	
	?>
	<script language="javascript">
	alert("Registered Successfully");
	window.location.href="keygen2.php?did=<?php echo $uname; ?>";
	</script>
	<?php
	}
	else
	{
	$msg="Alredy Exist!";
	}
}


?>
							<form name="form1" action="" method="post" role="form" class="contactForm">
							    <div class="form-group">
                                    <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Doctor Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
									<div class="form-group">
                                    <input type="text" name="speciality" class="form-control br-radius-zero" id="speciality" placeholder="Speciality" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
									<div class="form-group">
                                    <input type="text" name="mobile" class="form-control br-radius-zero" id="mobile" placeholder="Mobile No." data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
								<div class="form-group">
                                    <input type="text" name="email" class="form-control br-radius-zero" id="email" placeholder="e-mail" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                               
                                
                                
								<div class="form-action">
									<input type="submit" name="btn" class="btn btn-form" value="Submit" onClick="return validate()">
								</div>
								<div class="msg"><?php echo $msg; ?></div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ contact-->
	<!--footer-->
	<footer id="footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 marb20">
							<div class="ftr-tle">
								<h4 class="white no-padding">About Us</h4>
							</div>
							<div class="info-sec">
								<p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
							</div>
					</div>
					<div class="col-md-4 col-sm-4 marb20">
						<div class="ftr-tle">
							<h4 class="white no-padding">Quick Links</h4>
						</div>
						<div class="info-sec">
							<ul class="quick-info">
								<li><a href="adminhome.php"><i class="fa fa-circle"></i>Home</a></li>
								<li><a href="add_doctor.php"><i class="fa fa-circle"></i>Add Doctor</a></li>
								<li><a href="logout.php"><i class="fa fa-circle"></i>Logout</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 marb20">
						<div class="ftr-tle">
							<h4 class="white no-padding">Follow us</h4>
						</div>
						<div class="info-sec">
							<ul class="social-icon">
								<li class="bglight-blue"><i class="fa fa-facebook"></i></li>
								<li class="bgred"><i class="fa fa-google-plus"></i></li>
								<li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
								<li class="bglight-blue"><i class="fa fa-twitter"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-line">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<?php include("include/title.php"); ?>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
                            -->
                             <a href="https://bootstrapmade.com/"></a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/ footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>