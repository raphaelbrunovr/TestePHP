<?php
require_once '../classes/Contatos.php';
session_start();

$contato = new Contatos();

$contato->setId($_POST['id_contato']);
$contato->setNome($_POST['nome']);
$contato->setSobrenome($_POST['sobrenome']);
$contato->setEmail($_POST['email']);
$contato->setDtnascimento($_POST['dt_nascimento']);
$contato->setCargo($_POST['cargo']);
$contato->setEmpresa($_POST['empresa']);
$contato->setTelefone($_POST['telefone']);
$contato->setCelular($_POST['celular']);
$contato->setBairro($_POST['bairro']);
$contato->setCidade($_POST['cidade']);
$contato->setEstado($_POST['estado']);
$contato->setObservacoes($_POST['observacoes']);

if($contato->editarContatos()){
    $_SESSION["aviso"] = "Não Editado!";  
}else{
    $_SESSION["aviso"] = "Editado com sucesso!"; 
}
header("location: ../administrativo.php");