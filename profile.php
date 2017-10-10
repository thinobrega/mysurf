
<html>

<head>

<link rel="icon" href="img/icons/Water_sports_and_recreation_tours_Surfing-512.png" />




	<?php
	$host = "localhost";
$user = "root";
$pass = "";
$database = "tito";
$connection = mysqli_connect($host,$user,$pass)or die(mysqli_error());
mysqli_select_db($connection, $database) or die (mysqli_error());
	?>
														
	<?php
	
	/*=====================================================
	protege a pagina , se tiver email e senha , ok !, se nao, volta 
	=======================================================*/
	session_start();
	
	
	if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
		header('Location: login.php');
		exit;
	}else{
			//echo "Your email ". $_SESSION["email"] . " is loged in";
		
	}


	
		


?>													
														
														
		
	<?php
	
	// Salvar o email da Sessao em uma variavel
	$actemail = $_SESSION['email'];
	
	// Fazer a query em particular do usuario
	$sqlEmail = mysqli_query($connection,"SELECT * FROM tito WHERE client_email = '$actemail' ")or die (mysqli_error());
		
		

	
	


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
    <link href="css/profilegrayscale.min.css" rel="stylesheet">
	 <link href="css/profilemysurf.css" rel="stylesheet">

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
                    <i><img src="img/logo/brasil.jpg"></i>  <span class="light">My Surf</span> -  PROFILE
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
                        <a class="page-scroll" href="editform.php">Edit my Profile</a>
                    </li>
                    <li>
                        <a href ="logout.php">Log Out</a>
						
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
                        
						
						<?php
							// Fazer um Loop pra procurar o usuario selecionado e mostrar os dados	
	while($row = $sqlEmail->fetch_assoc())
	{
		echo "<h1 class='brand-heading'>" . 'Welcome, '.$row['client_lastname'] .'</h1>';
	//	echo "First Name: " . $row['client_fname'] .'</br>';
		
	}
						?>
						
                        <p class="intro-text">THIS IS YOUR PROFILE PAGE
                            <br> 
								<ol>
								

									<li><p>You may select the type of surf-board you want.</p></li>
									<li><p>You may perform order to rent the selected surf-board</p></li>
									<li><p>You may edit your profile settings</p></li>
									<li><p>You may check your status, cancel your profile or your order</p></li>
								
									
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
			<h2>Place your order here</h2>
                
				<div class="wrapform">
											<div class="wrap2">
											
		
												<form method="post" class="form" name="form" action="order.php">
													<div>
											
													<legend id="thx">Types of Surf-boards</legend>
													
														<div class="input-group radio">
																					  
															<input type="radio" name="boardType" id="Body-Board" value="Body-Board">
															<label for="Body-Board">Body-Board - $10,00</label></br>
															
															<input type="radio" name="boardType" id="Stand-Board" value="Stand-Board">
															<label for="Stand-Board">Stand-Board - $15,00</label></br>
															
															<input type="radio" name="boardType" id="Long-Board" value="Long-Board">
															<label for="Long-Board">Long-Board - $20,00</label></br>
															
															<input type="radio" name="boardType" id="Wind-Board" value="Wind-Board">
															<label for="Wind-Board">Wind-Board - $30,00</label></br>
															
															<input type="radio" name="boardType" id="Kite-Board" value="Kite-Board">
															<label for="Kite-Board">Kite-Board - $30,00</label></br></br>
														
														
																	
													<legend id="thxx">Time Length</legend>	
															</br>
															<input type="radio" name="timePeriod" id="01 Day" value="01 Day">
															<label for="01 Day">01 Day -  $00,00</label></br>
															
															<input type="radio" name="timePeriod" id="07 Days" value="07 Days">
															<label for="07 Days">07 Days - $20,00</label></br>
															
															<input type="radio" name="timePeriod" id="10 Days" value="10 Days">
															<label for="10 Days">10 Days - $30,00</label></br>
															
															<input type="radio" name="timePeriod" id="20 Days" value="20 Days">
															<label for="20 Days">20 Days - $50,00</label></br>
															
															<input type="radio" name="timePeriod" id="30 Days" value="30 Days">
															<label for="30 Days">30 Days - $70,00</label></br>
															
															
															
															
													
														</div>
															<input type="submit" id="btn-submit" value="Order Now">
															<input type="reset" id="btn-submit"  class="clearform" value="Clear Form">
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
