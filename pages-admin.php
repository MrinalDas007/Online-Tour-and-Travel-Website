<?php
	session_start();
	if(isset($_SESSION["admin"]))
	{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SHOW DETAILS TO ADMIN</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus1.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="https://twitter.com/login?lang=en" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="https://www.facebook.com" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="https://accounts.google.com/signin/v2/identifier?hl=en-US&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>
            <div id="pre-header" class="container" style="height: 40px">
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/Design.png" alt="Logo" />
                            </a>
                        </div>
						<div style="color:white; font-size:25px">
						<?php
							$name=$_SESSION["admin"];
							echo "Welcome to Admin Page!! $name ";
						?>
						</div>
                    </div>
                </div>
            </div>
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="post_header" class="container" style="height: 40px">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <div id="content">
                <div class="container background-white">
					<div class="row margin-vert-30">
						<form method="post">
						
						<div class="col-md-3">
							<button class="btn btn-primary pull-right" type="submit" name="btn8">Show Registered User Details</button>
						</div>
						</form>
						<?php
							if(isset($_POST["btn8"]))
							{
								echo "<script>window.location.href='admin.php'</script>";	
							}
						?>	
						<form method="post">
						<div class="col-md-3">
							<button class="btn btn-primary pull-right" type="submit" name="btn7">Show Flight Details</button>
						</div>
						</form>
						<?php
							if(isset($_POST["btn7"]))
							{
								echo "<script>window.location.href='admin_flight.php'</script>";	
							}
						?>	
						<form method="post">
                        <div class="col-md-3">
							<button class="btn btn-primary pull-right" type="submit" name="btn6">Show Train Details</button>
                        </div>
						</form>
						<?php
							if(isset($_POST["btn6"]))
							{
								echo "<script>window.location.href='admin_train.php'</script>";	
							}
						?>
						<form method="post">
						<div class="col-md-3">
							<button class="btn btn-primary pull-right" type="submit" name="btn5">Show Destinations Details</button>
						</div>
						</form>
						<?php
							if(isset($_POST["btn5"]))
							{
								echo "<script>window.location.href='admin_destination.php'</script>";	
							}
						?>	
						<div class="row margin-vert-30"></div>
						<form method="post">
                        <div class="col-md-3">
							<button class="btn btn-primary pull-right" type="submit" name="btn4">Show Hotel Details</button>
                        </div>
						</form>
						<?php
							if(isset($_POST["btn4"]))
							{
								echo "<script>window.location.href='admin_hotel.php'</script>";	
							}
						?>
						<form method="post">
                        <div class="col-md-3">
							<button class="btn btn-primary pull-right" type="submit" name="btn3">Show Cabs Details</button>
                        </div>
						</form>
						<?php
							if(isset($_POST["btn3"]))
							{
								echo "<script>window.location.href='admin_cabs.php'</script>";	
							}
						?>
						<form method="post">
                        <div class="col-md-3">
							<button class="btn btn-primary pull-right" type="submit" name="btn2">Show Admin Details</button>
                        </div>
						</form>
						<?php
							if(isset($_POST["btn2"]))
							{
								echo "<script>window.location.href='admin_details.php'</script>";	
							}
						?>
						<form method="post">
                        <div class="col-md-2">
							<button class="btn btn-primary pull-right" type="submit" name="btn1">Log Out</button>
                        </div>
						</form>
						<?php
							if(isset($_POST["btn1"]))
							{
								echo "<script>window.location.href='admin_login.php'</script>";	
							}
						?>
					</div>
				</div>
			</div>
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>(+033)2442-7638
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:mrinaldas969@gmail.com">info@mndas.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="index.html">www.DasTour&Travel.com</a>
                            </p>
                            <p><br><b>Address :</b>
								<br>QUEST MALL,
                                <br>Syed Amir Ali Ave Park Circus,
                                <br>Ballygunge,
                                <br>Kolkata, India</p>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-3 margin-bottom-20 padding-vert-30 text-center">
                            <h3 class="color-gray margin-bottom-10">Join our Newsletter</h3>
                            <p>
                                Sign up for our newsletter for all the
                                <br>latest news and information
                            </p>
                            <input type="email">
                            <br>
                            <button class="btn btn-primary btn-lg margin-top-20" style="background-color:aqua" type="button"><a href="assets/Brochure1.docx">Subscribe</a></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div id="footermenu" class="col-md-8">
                        </div>
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right" style="background: rgba(0, 0, 0, 0.53); color:#fff; width:450px; text-align:center">&copy; Copyright DasTour&Travel 2000. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
    </body>
</html>
<?php
	}
?>