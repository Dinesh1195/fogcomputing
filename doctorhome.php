<?php
include("include/protect.php");
include("include/dbconnect.php");
extract($_POST);
$msg="";
$uname=$_SESSION['uname'];

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
				        <li class="active"><a href="doctorhome.php">Home</a></li>
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
					<h2 class="ser-title">Doctor</h2>
					<hr class="botm-line">
				</div>
				<div class="col-md-4 col-sm-4">
			      <!--<h3></h3>-->
			      <div class="space"><img src="img/20121.jpg" width="250" height="190"></div>
			     
			      
			    </div>
				<div class="col-md-8 col-sm-8 marb20">
				  <div class="contact-info">
							<h3 class="cnt-ttl">Patient Information</h3>
							<div class="space"></div>
                           
							
							
							
							
					        <table width="754" border="1">
                              <tr>
                                <th width="43">Sno</th>
                                <th width="102">Patient ID</th>
                                <th width="61">Name</th>
								<th width="61">D.O.B</th>
                                <th width="118">Mobile No. </th>
                                <th width="65">E-mail</th>
                                <th width="48">Date</th>
                                <th width="204">Action</th>
                              </tr>
							  <?php
							  $i=0;
							  $qry=mysql_query("select * from md_patient where doctor='$uname' order by id desc");
							  while($row=mysql_fetch_array($qry))
							  {
							  $i++;
							  ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['uname']; ?></td>
                                <td><?php echo $row['name']; ?></td>
								<td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['rdate']; ?></td>
                                <td><a href="doc_upload.php?pid=<?php echo $row['uname']; ?>">Medical File</a> | <a href="doc_viewfile.php?pid=<?php echo $row['uname']; ?>">View</a> </td>
                              </tr>
							  <?php
							  }
							  ?>
                            </table>
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
								<li><a href="doctorhome.php"><i class="fa fa-circle"></i>Home</a></li>
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