<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<div class="rtecfull">

<form method="get" name="busca" action="searc.php">
	<label>Pesquisar</label>
<input type="text" name="busca">
<input type="submit" name="Ok" value="buscar">
</form>

<form  id="form_cadastro" method="post" action="salvetbc.php" name="singin">

	<ul>
		<li><h2> CADASTRO </h2></li>
	</ul>

	<ul>
		<li><input type="text" name="nome" placeholder="digite seu nome..." maxlength="150" required></li>	
    	<li><input type="text" name="email" placeholder="digite seu email..." maxlength="150" required></li>
		<li><input type="password" name="senha" placeholder="digite sua senha..." maxlength="150" required></li>
		<li><input type="password" name="confirsenha" placeholder="cofirme sua senha..." maxlength="150" required></li>
		<li><input type="submit" name="acao" value="salvar"></li>
	</ul>

</form>	

</div><!--Container pricipal rtecfull -->
</body>
</html>


