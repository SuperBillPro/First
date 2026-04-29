<?php
session_start();
session_destroy();
header("Location:../Vista/iniciosesion.php");
exit;
?>