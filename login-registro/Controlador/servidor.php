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
	
	//$sql_check = "SELECT * FROM usuario WHERE usr_email == $correo";
	//$result = mysqli_query($conn, $sql_check);
		$sql_check = "SELECT * FROM usuario WHERE usr_email = ?";
	$stmt = $conn->prepare($sql_check);
	$stmt->bind_param("s", $correo);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
    header("Location:../Vista/error.php");
    exit;
}else{

		$stmt = $conn->prepare("INSERT INTO usuario(usr_name, usr_email, usr_pass) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $user, $correo, $pass);
	$stmt->execute();


		header("Location:../Vista/perfil.php?user=$user&correo=$correo");
	exit;

	$stmt->close();
	$conn->close();
}
		
	
	
	
	


//if (mysqli_num_rows($result) ){
	
  //  header("Location:../Vista/error.php");
    //exit;
//}else{
//		$query = "INSERT INTO base_de_usuarios.usuario(usr_name, usr_email, usr_pass) VALUES ($user,$correo,$pass)";

  //  header("Location:../Vista/perfil.php");
   // exit;
//};
?>
