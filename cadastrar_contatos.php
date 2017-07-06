<?php
include_once 'classes/Contatos.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />

        <title></title>
    </head>
    <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="administrativo.php">TestePHP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="administrativo.php">HOME</a></li>        
        <li><a href="inc/logout.php">SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>
    
    
  	
    <div class="container">
	<div class="row">
            <h2>Cadastrar Contatos</h2>
            <hr/>
    		<form action="inc/cadastrar.php" method="post">
            <div class="form-group">
  			<label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="ex João"><br />
  			<label>Sobrenome</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="ex silva"/><br />
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" placeholder="ex joao@gmail.com" size="10"/><br>
            <label>Data Nascimento</label>
            <input type="text" class="form-control" name="dt_nascimento" placeholder="ex 03/12/86" size="20"/><br />
            <label>Cargo</label>
            <input type="text" class="form-control" name="cargo" placeholder="assistente"/><br />
            <label>Empresa</label>
            <input type="text" class="form-control" name="empresa" placeholder="XYZ"><br />
  			<label>Telefone</label>
            <input type="text" class="form-control" name="telefone" placeholder="ex 2222-2222"/><br />
            <label>Celular</label>
            <input type="text" class="form-control" name="celular" placeholder="ex 99999-9999"/><br/>
            <label>Bairro</label>
            <input type="text" class="form-control" name="bairro" placeholder="ex centro"/><br />
            <label>Cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="ex Rio de Janeiro"/><br />
            <label>Estado</label>
            <input type="text" class="form-control" name="estado" placeholder="ex RJ"><br />
  			<label>Observacoes</label>
            <textarea class="form-control" name="observacoes" placeholder="..."/></textarea><br />
            
			<input type="submit" class="btn btn-info" value="Cadastrar">
			</div>
            </form>
    </div>
    </div>
    </body>
</html>
