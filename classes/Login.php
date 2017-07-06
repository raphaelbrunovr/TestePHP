<?php
require_once 'Conexao.php';
class Login extends Conexao{
    protected $usuario;
    protected $senha;
    
    public function __construct($login,$senha){
        $this->setUsuario($login);
        $this->setSenha(md5($senha));
    }
    function getUsuario() {
        return $this->usuario;
    }
    function getSenha() {
        return $this->senha;
    }
    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    } 
    public function Logar() {
        $conexao = new Conexao();
        $conexao->Abrir();
		session_start();
        $sql = "select * from tbl_usuario where login='{$this->getUsuario()}' and senha='{$this->getSenha()}'";
        
        if(mysqli_num_rows($conexao->mysqli->query($sql))){
            $_SESSION["aviso"] = "Logado com sucesso!";
			header("location: ../administrativo.php");
			
        }else{
            $_SESSION["aviso"] = "Usuário ou senha inválidos!";
			header("location: ../index.php");
        }
        $conexao->Fechar();
    } 
    
}
