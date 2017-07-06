<?php
session_start();
function verificaUsuario(){
	if(!usuarioEstaLogado()){
		$_SESSION["aviso"]="Você não tem acesso a esta funcionalidade.";
        header("location: index.php");
	}
}
function usuarioEstaLogado(){
	return isset($_SESSION['usuario_logado']);
}
function usuarioLogado(){
	return $_SESSION['usuario_logado'];
}
function logaUsuario($login){
	$_SESSION['usuario_logado'] = $login;
}
function perfilUsuario(){
	return $_SESSION['perfil_usuario'];
}
function logout(){
	session_destroy();
	session_start();
}
?>