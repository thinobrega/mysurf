<html>

<head>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "tito";
$connection = mysqli_connect($host,$user,$pass)or die(mysqli_error());
mysqli_select_db($connection, $database) or die (mysqli_error());
?>		

														
										
														
														
				<?php

$client_First_Name = $_POST['clientFirstName'];
$client_Last_Name = $_POST['clientLastName'];
$client_Email = $_POST['clientEmail'];
$client_Age = $_POST['clientAge'];
$client_Password = $_POST['clientPassword'];
$client_invoice_time= "";
$client_invoice_total= "";
$client_invoice_board= "";
$client_board_type= "";
$client_time_period= "";
$sql = mysqli_query($connection,"INSERT INTO tito 
(client_fname,			client_lastname,	client_email,	client_age,		client_pass,	client_board_type,	client_time_period, 	client_invoice_total,	client_invoice_board,	client_invoice_time)VALUES
('$client_First_Name','$client_Last_Name','$client_Email','$client_Age','$client_Password','$client_board_type','$client_time_period','$client_invoice_total','$client_invoice_board','$client_invoice_time')");




?>										
														
														
														
														
														
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
		<link rel="icon" href="img/icons/Water_sports_and_recreation_tours_Surfing-512.png" />
    <title>My Surf - Rental Boards</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">
	 <link href="css/mysurf.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>

</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">My Surf</span> -  REGISTER
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                  
                    <li>
                        <a class="page-scroll" href="#register">Register</a>
                    </li>
                    <li>
                        
						<a href="index.html">Back</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Terms</h1>
                        <p class="intro-text">TERMS AND CONDITIONS
                            <br> 
								<ol>
									<li><p>Each kind of board has a different price.</p></li>
									<li><p>The boards come without paraffin.</p></li>
									<li><p>Late returns has a fee.</p></li>
									<li><p>The board cannot be damaged.</p></li>
								
									
							</ol></p>
                        <a href="#register" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
	
 
	 <section id="register" class="content-section text-center">		
			
		<div class="content">
			
			<div class="content-left">
						
					<div class="pics">
					<img class="mySlides" src="img/a.jpeg" width="100%" height="900px">
					<img class="mySlides" src="img/b.jpg" width="100%" height="900px">
					
				
					<img class="mySlides" src="img/e.jpg" width="100%" height="900px">
					<img class="mySlides" src="img/f.jpg" width="100%" height="900px">
					<img class="mySlides" src="img/g.jpg" width="100%" height="900px">
			
				</div>	
				
				</div> <!--content-left-->
			
			
			
				<div class="content-right">
			<div id="Registration-Form" class="tabcontent">
			<h2>REGISTRATION FORM</h2>
                
				<div class="wrapform">
											<div class="wrap2">
											
		
												<form class="form" name="form">
													<div>
													
														
													
													
												<legend id="thx">Thank You!</legend>
												<a href="login.php"><div class="box">Log In</div></a>

														
														
														
													
														
														
												
												</div>
											</form><!--form-->
					
										</div><!--wrap2-->
										
							</div><!--wrap form-->
                
			</div> <!--registration form-->
        </div><!--content right-->
    	
		</div><!--content-->
    
	
	
	</section>
	

    <!-- Map Section -->
    <div id="map"></div>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; MY SURF - Board Rentals 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

		<script src="js/tito.js"></script>
</body>

</html>
