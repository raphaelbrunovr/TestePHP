<?php
include_once 'classes/Contatos.php';
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
            <div class="col-md-6">
            <h2>Bem Vindo!</h2>
            </div>
            <div class="col-md-6">
                <p align="right"><a href="cadastrar_contatos.php" class="btn btn-info align" role="button">Novo Contato</a></p>
            </div>
        </div>
        <hr/>
        <div class="row">
        <?php
		if(isset($_SESSION["aviso"])){?>
    	<div class="alert alert-info fade in">
    	<a href="#" class="close" data-dismiss="alert" aria-label="Fechar">&times;</a>
		<strong><?= $_SESSION["aviso"]?></strong></div>
		<?php unset($_SESSION["aviso"]);
		}
		?>
        <table class="table table-striped">
	<tr>
    	<th>Nome</th>
        <th>Sobrenome</th>
        <th>E-mail</th>
        <th>Data de nascimento</th>
        <th>Cargo</th>
        <th>Empresa</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Observações</th>
        <th colspan="2">Ações</th>
        </tr>
        <?php
	$contato = new Contatos();
        $contato->ExibirContatos();        
	?>
    </table>
        </div>
    </div>
    </form>
    </body>
</html>
