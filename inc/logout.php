<?php
include 'seguranca.php';
logout();
$_SESSION["aviso"] = "Deslogado com sucesso.";
header("location: ../index.php");        
?>
