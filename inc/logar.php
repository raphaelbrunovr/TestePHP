<?php
        require_once '../classes/Login.php';
		$login = $_POST['login'];
		$senha = $_POST['senha'];

        $login = new Login($login,$senha);
        $login->Logar();
?>
