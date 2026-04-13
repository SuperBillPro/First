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
	session_start();
	//$sql_check = "SELECT * FROM usuario WHERE usr_email == $correo";
	//$result = mysqli_query($conn, $sql_check);
		$sql_check = "SELECT * FROM usuario WHERE usr_email = ? AND usr_name = ? AND usr_pass = ?";
	$stmt = $conn->prepare($sql_check);
	$stmt->bind_param("sss", $correo, $user, $pass);
	$stmt->execute();
	$result = $stmt->get_result();
	
	if ($result->num_rows > 0) {
		// show user id in result
		$usuario = $result->fetch_assoc();
		print_r($usuario);
		$_SESSION['user'] = $usuario["id"];
    	header("Location:../Vista/perfil.php?user=$user&correo=$correo");
    exit;
}else{

		header("Location:../Vista/error.php");
	exit;

	$stmt->close();
	$conn->close();
}
		
	
	
	
	



?>
