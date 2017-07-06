<?php
class Conexao{
protected $host = 'localhost:3306';
protected $usuario = 'root';
protected $senha = 'ra1986';
protected $banco = 'testephp';	
protected $mysqli;

    public function Abrir() 
    {	
      $this->mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
    }

    public function Fechar() 
    {
      $this->mysqli->close();
    }
}

    

