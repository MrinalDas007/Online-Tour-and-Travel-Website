<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>SHOW TRAINS DETAILS </title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus1.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
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
                <!-- Spacing above header -->
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/Design.png" alt="Logo" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.html" class="fa-home">Home</a>
                                </li>
                                <li>
                                    <a href="pages-about-us.html" class="fa-gears">About Us</a>
                                </li>    
                                <li>
                                    <a href="gallery.html" class="fa-th">Gallery</a>
                                </li>
                                <li>
                                    <span class="fa-copy">Features</span>
									<ul>
                                        <li>
                                            <a href="destination.html">Destinations</a>
                                        </li>
                                        <li>
                                            <a href="web\booking.php">Travel Bookings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
									<a href="pages-sign-up.php"  class="fa-font">Register/Log In</a>
                                </li>
                                <li>
                                    <a href="contact.html" class="fa-comment">Contact Us</a>
                                </li>
                            </ul>
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
                        <div class="col-md-12">
						<h1 style="text-align:center">TRAIN DETAILS</h1>
						<?php
							$con=mysqli_connect("localhost","root","","tour_database");
							if(!$con)
								die("cannot connect to server");
							else
							{
								$here=$_POST["c23"];
								$there=$_POST["c24"];
								$sql="select * from train_search where train_from='".$here."' and train_to='".$there."'";
								$rs=mysqli_query($con,$sql);
								if(mysqli_num_rows($rs)>0)
								{
									echo "<table border='1px' align='center' cellpadding='20px' cellspacing='10px'>";
									echo "<tr align='center'>";
									echo "<th>TRAIN NAME</th>";
									echo "<th>TRAIN FROM</th>";
									echo "<th>TRAIN TO</th>";
									echo "<th>TRAIN DEPARTURE TIME</th>";
									echo "<th>TRAIN ARRIVAL TIME</th>";
									echo "<th>TRAVEL CLASS</th>";
									echo "<th>JOURNEY TYPE</th>";
									echo "<th>TRAIN PRICE</th>";
									echo "</tr>";
									while($row=mysqli_fetch_row($rs))
										{
											echo "<tr align='center'>";
											echo "<td>$row[1]</td>";
											echo "<td>$row[2]</td>";
											echo "<td>$row[3]</td>";
											echo "<td>$row[4]</td>";
											echo "<td>$row[5]</td>";
											echo "<td>$row[6]</td>";
											echo "<td>$row[7]</td>";
											echo "<td>$row[8]</td>";
											echo "</tr>";
										}
										echo "</table>";
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
            <div id="content-bottom-border" class="container">
            </div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <!-- Contact Details -->
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
                        <div class="col-md-3 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Menu</h3>
                            <ul class="menu">
                                <li>
                                    <a href="index.html" class="fa-home">Home</a>
                                </li>
                                <li>
                                    <a href="pages-about-us.html" class="fa-gears">About Us</a>
                                </li>
                                <li>
                                    <a href="web\index2.html" class="fa-copy">Bookings</a>
                                </li>
                                <li>
                                    <a href="pages-login.html" class="fa-font">Login</a>
                                </li>
                                <li>
                                    <a href="contact.html" class="fa-comment">Contact Us</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-1"></div>
                        <!-- Disclaimer -->
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
  //}
 ?>