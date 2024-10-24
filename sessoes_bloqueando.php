<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando páginas por sessões</title>
	<?php 
	
	date_default_timezone_set("America/Sao_Paulo");
	session_start();

	$_SESSION['nome'] = $_POST['nome'];

	$_SESSION['senha'] = $_POST['senha'];

 ?>
</head>
<body>

<br>Funcionário: </br> <?php echo $_SESSION['nome']; ?> - logado com sucesso. <br>

<br>Data de conexão: </br><?php
 echo date("d/m/Y"); ?><br>

<br>Hora de conexão: </br><?php echo date("H:i:s"); ?><br>


<a href="sessoes_verificar_sessao.php">Área de administrador</a>


</body>
</html>