<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="css/estilos.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
    <div class="jumbotron text-center">
  	<h1>Contatos</h1>
  	<p>Sistema de gestão de contatos</p> 
	</div>
    <div class="container">
	<div class="row">
    
	<form class="form-m" action="inc/logar.php" method="post">
    <?php
	if(isset($_SESSION["aviso"])){?>
    	<div class="alert alert-info fade in">
    	<a href="#" class="close" data-dismiss="alert" aria-label="Fechar">&times;</a>
		<strong><?= $_SESSION["aviso"]?></strong></div>
		<?php unset($_SESSION["aviso"]);
	}
	?>
    <div class="panel panel-login">
  		<div class="panel-heading"><h4>Informe seu login</h4></div>
  		<div class="panel-body">
		
  		<div class="form-group">
    	<label for="email">Login:</label>
    	<input type="text" class="form-control" name="login">
  		</div>
  		<div class="form-group">
    	<label for="pwd">Senha:</label>
    	<input type="password" class="form-control" name="senha">
  		</div>
        <button type="submit" class="btn btn-success">Logar</button>
	
    	</div>
    	</div>
    </div>
    </form>
    </body>
</html>
