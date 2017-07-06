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
            <h2>Editar Contatos</h2>           
            <hr/>
    		<form action="inc/editar.php" method="post">
            <div class="form-group">
  			<?php
			$contato = new Contatos();
            $contato->setId($_GET['id_contato']);
        	$contato->ExibirContato();    
            ?>
			<input type="submit" class="btn btn-info" value="Editar">
			</div>
            </form>
    </div>
    </div>
    </body>
</html>
