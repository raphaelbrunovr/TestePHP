<?php
require_once '../classes/Contatos.php';
session_start();
$contato = new Contatos();
$contato->setId($_GET['id_contato']);

if($contato->deletarContatos()){    
    $_SESSION["aviso"] = "Não Deletado!";  
}else{
    $_SESSION["aviso"] = "Deletado com sucesso!"; 
}
header("location: ../administrativo.php");