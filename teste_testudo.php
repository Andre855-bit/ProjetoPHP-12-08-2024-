<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

	session_start();

	$_SESSION['nome'] = "Administrador";

	//session_unset();

	//session_destroy();

	?>

	<!--<h3>Sessão de usuário</h3>
	Bem vindo, Sir.-->
	SID desta sessão é <?php echo session_id(); ?> 
	<?php// echo $_SESSION['nome']; ?>
</body>
</html>

