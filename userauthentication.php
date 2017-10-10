<?php
	include('classes/connection.php'); 

$host = "localhost";
$user = "root";
$pass = "";
$database = "tito";
$connection = mysqli_connect($host,$user,$pass)or die(mysqli_error());
mysqli_select_db($connection, $database) or die (mysqli_error());

	?>
	
														
<html>
	<head>


		<title>	User Authentication</title>
	</head>
	

	
	
	
	
	<body>
<?php
$email=$_POST['email'];
$password=$_POST['password'];

$sql = mysqli_query($connection,"SELECT * FROM tito WHERE client_email = '$email' and client_pass='$password'")or die (mysqli_error());

$row = mysqli_num_rows($sql);
var_dump($row);

if ($row>0){
session_start();
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];

header("Location: loginsucess.php");

}else{
header("Location: loginfailed.php");


}



?>




	</body>
</html>