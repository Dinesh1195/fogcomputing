<?php
session_start();
include("include/dbconnect.php");
extract($_POST);
$msg="";
if(isset($btn))
{
$uname=strtoupper($uname);
	$qry=mysql_query("select * from md_doctor where uname='$uname' && pass='$pass'");
	$num=mysql_num_rows($qry);
		if($num==1)
		{
		$_SESSION['uname']=$uname;
		header("location:doctorhome.php");
		}
		else
		{
		$msg="Invalid User!";
		}

}



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
			  
                if (document.form1.uname.value == "")
                {
                    alert("Enter the Username");
                    document.form1.uname.focus();
                    return false;
                }
				if (document.form1.pass.value == "")
                {
                    alert("Enter the Password");
                    document.form1.pass.focus();
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
				        <li class=""><a href="index.php">Home</a></li>
				        <li class=""><a href="doctor.php">Doctor</a></li>
				        <li class="active"><a href="login.php">Patient</a></li>
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
					<h2 class="ser-title">Doctor</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-4 col-sm-4">
			      <!--<h3></h3>-->
			      <div class="space"><img src="img/20121.jpg" width="250" height="190"></div>
			     
			      
			    </div>
				<div class="col-md-8 col-sm-8 marb20">
					<div class="contact-info">
							<h3 class="cnt-ttl">Doctor Login</h3>
							<div class="space"></div>
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
							<form name="form1" action="" method="post" role="form" class="contactForm">
							    <div class="form-group">
                                    <input type="text" name="uname" class="form-control br-radius-zero" id="uname" placeholder="Doctor ID" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control br-radius-zero" name="pass" id="pass" placeholder="Password"  />
                                    <div class="validation"></div>
                                </div>
                                
                                
								<div class="form-action">
									<input type="submit" name="btn" class="btn btn-form" value="Login" onClick="return validate()">
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
								<li><a href="index.php"><i class="fa fa-circle"></i>Home</a></li>
								<li><a href="doctor.php"><i class="fa fa-circle"></i>Doctor</a></li>
								<li><a href="login.php"><i class="fa fa-circle"></i>Patint</a></li>
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