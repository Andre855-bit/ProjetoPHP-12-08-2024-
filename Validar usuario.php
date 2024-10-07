<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar usuário</title>
</head>
<body>
	<h1>Validar usuário</h1>
	<form action="recebe_usuario.php" method="post">
		<label for="email">Email:</label>
			<input type="email" name="email" id="email">
		<br><br>
		<label for="email">Senha:</label>
			<input type="password" name="senha" id="senha">
		<br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">	
		<br><br><br><br>
		<ol>Escolha uma opção:
			<ul>- Pizza</ul>
			<ul>- Hambúrguer</ul>
			<ul>- Esfiha</ul>
			<ul>- Pastel</ul>
			<ul>- Sanduíche de presunto</ul>
		</ol>
		<input type="text" name="escolha" value="escreva!">
		<!--<input type="checkbox" id="pizza" class="comida" name="escolha" value="Pizza">Pizza
		<br>
		<input type="checkbox" id="Hambúrguer" class="comida" name="escolha" value="Hambúrguer">Hambúrguer
		<br>
		<input type="checkbox" id="Esfiha" class="comida" name="escolha" value="Esfiha">
		Esfihas
		<br>
		<input type="checkbox" id="Pastel" class="comida" name="escolha" value="Pastel">
		Pastel
		<br>
		<input type="checkbox" id="Sanduíche de presunto" class="comida" name="escolha" value="Sanduíche de presunto">Sanduíche de presunto
		<br>-->






	</form>
</body>
</html>