<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>SHOW DETAILS </title>
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
        <link rel="stylesheet" href="assets/css/nexus12.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body style="width: 1600px;">
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
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
                                <img src="assets/img/Design.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- Top Menu -->
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
            <div id="content" style="width: 1600px;">
                <div class="container background-white">
					<div class="row margin-vert-30">
                        <div class="col-md-12">
						<h1 style="text-align:center">FLIGHT DETAILS</h1>
						<?php
							$con=mysqli_connect("localhost","root","","tour_database");
							if(!$con)
								die("cannot connect to server");
							else
							{
								$sql="select * from flight_search";
								$rs=mysqli_query($con,$sql);
								if(mysqli_num_rows($rs)>0)
								{
									echo "<table border='1px' align='center' cellpadding='20px' cellspacing='10px'>";
									echo "<tr align='center'>";
									echo "<th>FLIGHT ID</th>";
									echo "<th>FLIGHT NAME</th>";
									echo "<th>FLIGHT FROM</th>";
									echo "<th>FLIGHT TO</th>";
									echo "<th>FLIGHT DEPARTURE TIME</th>";
									echo "<th>FLIGHT ARRIVAL TIME</th>";
									echo "<th>TRAVEL CLASS</th>";
									echo "<th>JOURNEY TYPE</th>";
									echo "<th>FLIGHT PRICE</th>";
									echo "<th>UPDATE</th>";
									echo "<th>&nbsp;&nbsp;DELETE</th>";
									echo "</tr>";
									while($row=mysqli_fetch_row($rs))
										{
											echo "<tr>";
											echo "<td><input type='text' name='t1' value='&nbsp;&nbsp;$row[0]' disabled></td>";
											echo "<td><input type='text' name='t1' value='&nbsp;&nbsp;$row[1]' disabled></td>";
											echo "<td><input type='text' name='t2' value='&nbsp;&nbsp;$row[2]' disabled></td>";
											echo "<td><input type='text' name='t3' value='&nbsp;&nbsp;$row[3]' disabled></td>";
											echo "<td><input type='text' name='t4' value='&nbsp;&nbsp;$row[4]' disabled></td>";
											echo "<td><input type='text' name='t5' value='&nbsp;&nbsp;$row[5]' disabled></td>";
											echo "<td><input type='text' name='t6' value='&nbsp;&nbsp;$row[6]' disabled></td>";
											echo "<td><input type='text' name='t7' value='&nbsp;&nbsp;$row[7]' disabled></td>";
											echo "<td><input type='text' name='t8' value='&nbsp;&nbsp;$row[8]' disabled></td>";
											echo "<td><a href='update_info1.php?id=".$row[0]."'>&nbsp;&nbsp;UPDATE&nbsp;&nbsp;</a></td>";
											echo "<td><a href='delete1.php?id=".$row[0]."' onclick='return confirm('Are you sure to delete this entire id?');'>&nbsp;&nbsp;DELETE&nbsp;&nbsp;</a></td>";
											echo "</tr>";
										}
										echo "</table>";
									}
								}
							?>
							<br>
							<hr>
						</div>
					</div>
					<div class="row margin-vert-30">
						<div class="row">
                            <div class="col-md-6">
								<form method="post">
									<button class="btn btn-primary pull-right" type="submit" name="btn5">BACK</button>
								</form>
                            </div>
                        </div>
						<?php
							if(isset($_POST["btn3"]))
							{
								echo "<script>window.location.href='update1.php'</script>";	
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
                        <div class="col-md-4"></div>
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