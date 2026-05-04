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
if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error());
}
$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
		// obtener detalles del archivo subido
		$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
		$fileName = $_FILES['uploadedFile']['name'];
		$fileSize = $_FILES['uploadedFile']['size'];
		$fileType = $_FILES['uploadedFile']['type'];
		$fileNameCmps = explode(".", $fileName);
		$fileExtension = strtolower(end($fileNameCmps));

		// sanitiza el nombre del archivo
		$newFileName = md5(time() . $fileName) . '.' . $fileExtension;

		// Comprueba si el archivo tiene alguna de las siguientes extensiones:
		$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'jfif');
		if (in_array($fileExtension, $allowedfileExtensions)) {
			// directorio en el que se moverá el archivo subido
			$uploadFileDir = '../Vista/imagenes/';
			$dest_path = $uploadFileDir . $newFileName;

			if (move_uploaded_file($fileTmpPath, $dest_path)) {
				$message = 'El archivo se ha subido correctamente.';
				// Make query
				session_start();
				//$sql_check = "SELECT * FROM usuario WHERE usr_email == $correo";
				//$result = mysqli_query($conn, $sql_check);
				$sql_check = "SELECT * FROM usuario WHERE usr_email = ?";
				$stmt = $conn->prepare($sql_check);
				$stmt->bind_param("s", $correo);
				$stmt->execute();
				$result = $stmt->get_result();
				$_SESSION['user'] = $usuario["id"];
				if ($result->num_rows > 0) {
					header("Location:../Vista/error.php");
					exit;
				} else {

					$stmt = $conn->prepare("INSERT INTO usuario(usr_name, usr_email, usr_pass, imagen) VALUES (?, ?, ?, ?)");
					$stmt->bind_param("ssss", $user, $correo, $pass, $newFileName);
					$stmt->execute();


					header("Location:../Vista/perfil.php?user=$user&correo=$correo");
					exit;

					$stmt->close();
					$conn->close();
				}
			} else {
				$message = 'Hubo un error al mover el archivo al directorio de carga. Por favor, asegúrese de que el directorio de carga sea escribible por el servidor web.';
			}
		} else {
			$message = 'La carga del archivo falló. Tipos de archivo permitidos: ' . implode(',', $allowedfileExtensions);
		}
	} else {
		$message = 'Se ha producido un error al cargar el archivo. Por favor, revise el siguiente error.<br>';
		$message .= 'Error:' . $_FILES['uploadedFile']['error'];
	}
}








//if (mysqli_num_rows($result) ){

//  header("Location:../Vista/error.php");
//exit;
//}else{
//		$query = "INSERT INTO base_de_usuarios.usuario(usr_name, usr_email, usr_pass) VALUES ($user,$correo,$pass)";

//  header("Location:../Vista/perfil.php");
// exit;
//};
