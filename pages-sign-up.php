<?php
	session_start();
?>	
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration Form</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        
        <link href="favicon.ico" rel="shortcut icon">
        
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus4.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		<link href="assets/css/style3.css" rel="stylesheet" type="text/css" media="all" />
		<link href="assets/css/font-awesome3.css" rel="stylesheet"> 
		<link href="//fonts.googleapis.com/css?family=Cormorant+Unicase:300,400,500,600,700" rel="stylesheet">
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
									<a href="pages-sign-up.php" class="fa-font">Register/Log In</a>
                                </li>
                                <li>
                                    <a href="contact.php" class="fa-comment">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="post_header" class="container" style="height: 40px">
            </div>
	<div class="main agileits-w3layouts">
		<h1>REGISTER/LOG IN</h1>
		<div class="main-agileinfo"> 
			<div class="agileui-forms">
				<div class="container-form">
					<div class="form-item log-in">
						<div class="w3table agileinfo"> 
							<div class="w3table-cell register"> 
								<div class="w3table-tophead">
									<h2>Log in</h2>
								</div>
								<form method="post"> 
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="user_id" required=""> 
											<label>User Id</label>
											<span></span>
										</div>
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="Username" required=""> 
											<label>Username</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="Password" name="Password" required="">
											<label>Password</label>
											<span></span>
										</div>
										<a href="pages-forgot-password.php">forgot password?</a>										
										<input type="submit" name="btn2" value="Log in"> 
									</div>
									<div class="social-grids">
										<div class="social-text">
											<p>Or Log in with</p>
										</div>
										<div class="social-icons">
											<ul>
												<li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-rss"></i></a></li>
											</ul>
										</div>
										<div class="clear"> </div>
									</div>

								</form>  
							</div>
						</div>
					</div>
					<?php
						if(isset($_POST["btn2"]))
						{
							include("connect.php");
							$id=$_POST["user_id"];
							$name=$_POST["Username"];
							$pass=$_POST["Password"];
					
							$q="select * from tour_register where reg_id=".$id." and reg_name='".$name."' and reg_pass='".$pass."'";
							$rs=mysqli_query($con,$q);
							if(mysqli_num_rows($rs)==1)
							{
								$_SESSION["reg_name"]=$name;
								echo "<script>alert('Login Successful')</script>";
								echo "<script>window.location.href='user_login.php'</script>";	
							}
							else
							{
								echo "<script>alert('Login Unsuccessful')</script>";
								echo "<script>window.location.href='pages-sign-up.php'</script>";
							}
						}
					?>
					<div class="form-item sign-up">
						<div class="w3table w3-agileits">
							<div class="w3table-cell register">   
									<h3>REGISTER</h3>
								<form method="post">
									<div class="fields-grid">
										<div class="styled-input agile-styled-input-top">
											<input type="text" name="Full_name" required=""> 
											<label>Full name</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="email" name="Email" required="">
											<label>Email</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="tel" name="Phone" required="">
											<label>Phone Number</label>
											<span></span>
										</div>
										<div class="styled-input">
											<input type="password" name="password" required="">
											<label>Password</label>
											<span></span>
										</div>
										<div class="clear"> </div>
										 <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>I agree to the <a href="#">Terms and Conditions</a></label>
									</div>
									<input type="submit" name="btn1" value="REGISTER">
								</form>

							</div>
						</div>
					</div>
				</div>
				<div class="container-info">
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Have an account? </p>
								<div class="btn"> Log In </div>
							</div>
						</div>
					</div>
					<div class="info-w3lsitem">
						<div class="w3table">
							<div class="w3table-cell">
								<p> Dont have an account?</p>
								<div class="btn">Register</div>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div> 
				
				
			</div> 
		</div>	
	</div>
            <div id="base">
                <div class="container padding-vert-30 margin-top-60">
                    <div class="row">
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>(+91)98368-33051
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
                                    <a href="web\booking.php" class="fa-copy">Bookings</a>
                                </li>
                                <li>
                                    <a href="pages-sign-up.php" class="fa-font">Login</a>
                                </li>
                                <li>
                                    <a href="contact.php" class="fa-comment">Contact Us</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-1"></div>
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
                        <div id="copyright" class="col-md-4 copyw3-agile">
                            <p class="pull-right">&copy; Copyright DasTour&Travel 2000. All Rights Reserved. </p>
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
			<script  src=" js/jquery-1.12.3.min.js"></script> 
			<script>
				$(".info-w3lsitem .btn").click(function() {
					$(".main-agileinfo").toggleClass("log-in");
					});
					$(".container-form .btn").click(function() {
						$(".main-agileinfo").addClass("active");
					});
			</script>
			<?php
		
			if(isset($_POST["btn1"]))
			{
				$name=$_POST["Full_name"];
				$email=$_POST["Email"];
				$phone=$_POST["Phone"];
				$pass=$_POST["password"];
				
				include("connect.php");
				$sql="insert into tour_register(reg_name,reg_email,reg_phone,reg_pass)value('".$name."','".$email."','".$phone."','".$pass."')";
				$n=mysqli_query($con,$sql);
				if($n==1)
				{
					$q1="select reg_id from tour_register where reg_name='".$name."' and reg_email='".$email."' and reg_pass='".$pass."'";
					$rs=mysqli_query($con,$q1);
					if(mysqli_num_rows($rs)>0)
					{
						while($row=mysqli_fetch_row($rs))
						{
							echo "<script>alert('User Register! Your Registration Id is $row[0]')</script>";
							echo "<script>window.location.href='pages-sign-up.php'</script>";
						}
					}
				}
			}
			
		?>
    </body>
</html>