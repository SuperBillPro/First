<?php
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
