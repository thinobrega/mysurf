<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "tito";
$connection = mysqli_connect($host,$user,$pass)or die(mysqli_error());
mysqli_select_db($connection, $database) or die (mysqli_error());

	session_start();
	
	
	if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])){
		header("Location: login.php");
		exit;
	}else{
			echo "Your email ". $_SESSION["email"] . " is loged in";
		
	}





$actemail = $_SESSION['email'];
		

//$id = $_GET['client_id'];

$client_fname = $_POST['client_fname'];

$client_lastname = $_POST['client_lastname'];

$client_email = $_POST['client_email'];

$client_age = $_POST['client_age'];
$client_pass = $_POST['client_pass'];




$query = "UPDATE tito SET client_fname = '$client_fname', client_lastname='$client_lastname',client_email='$client_email',client_age='$client_age',client_pass='$client_pass' WHERE client_email = '$actemail'";

var_dump($query);

if (mysqli_query($connection, $query)){
header("Location:profile.php");
	
}else{echo"Error !";}mysqli_close($connection);


<a href="/view_folder/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>

?>