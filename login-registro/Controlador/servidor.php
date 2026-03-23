<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$correo = $_POST["correo"];
// Database configuration
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'base_de_usuarios';
	// Establish database connection
	$conn = mysqli_connect($hostname, $username, $password, $database);
	// Check connection
	if(!$conn){
		die('Connection failed: ' . mysqli_connect_error());
	}

	// Make query
	$sql_check = "SELECT * FROM usuario WHERE usr_email == $correo";
	$result = mysqli_query($conn, $sql_check);
	
	


if (mysqli_num_rows($result) ){
	
    header("Location:../Vista/error.php");
    exit;
}else{
		$query = "INSERT INTO base_de_usuarios.usuario(usr_name, usr_email, usr_pass) VALUES ($user,$correo,$pass)";

    header("Location:../Vista/perfil.php");
    exit;
};
?>
