<?php
// Database configuration
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'base_usuarios';
	// Establish database connection
	$conn = mysqli_connect($hostname, $username, $password, $database);
	// Check connection
	if(!$conn){
		die('Connection failed: ' . mysqli_connect_error());
	}

	// Make query
	$query = "SELECT * FROM usuario";
	$result = mysqli_query($conn, $query);
	$usuarios = [];
	while($row = mysqli_fetch_assoc($result)) {
		$usuarios[] = $row;
	}
	print_r($usuarios);

$user = $_POST["user"];
$pass = $_POST["pass"];
$correo = $_POST["correo"];
if ($user == "Pepe" && $pass == "12345678" && $correo == "pepe@gmail.com"){
    header("Location:../Vista/perfil.php");
    exit;
}else{
    header("Location:../Vista/index.php");
    exit;
};
?>
