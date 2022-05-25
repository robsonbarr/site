
<?php include_once"config.php";?>
<?php 

$id = $_GET['id'];

$conex = mysqli_connect($servidor,$dbuser,$dbpassord,$dbname);
mysqli_set_charset($conex, "utf8");
$result_name = "SELECT * FROM `clientes_adm` WHERE id= '$id' LIMIT 1";
$result_names = mysqli_query($conex ,$result_name);
while($linha = mysqli_fetch_array($result_names)) {
		$id = $linha['id'];
		$nome = $linha['nome'];
		$email = $linha['email'];
		$senha = $linha['senha'];
		$confirsenha = $linha['confirsenha'];
}



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>



</head>
<body>

<div class="rtecfull">

<form method="get" name="busca" action="searc.php">
	<label>Pesquisa</label>
<input type="text" name="busca">
<input type="submit" name="Ok">
</form>

<form method="post" action="atualizar.php" name="singin">

	<ul>
		<li><h2>Editar informações</h2></li>
	</ul>
<ul>

<ul>
	<li><input type="text" name="nome" placeholder="digite seu nome..." maxlength="150" required value="<?php echo $nome; ?>"></li>	
	<li><input type="hidden" name="id" value="<?php echo $id; ?>"></li>	
    <li><input type="text" name="email" placeholder="digite seu email..." maxlength="150" required value=" <?php echo $email;?>"></li>
	<li><input type="password" name="senha" placeholder="digite sua senha..." maxlength="150" required value=" <?php echo $senha;?>"></li>
	<li><input type="password" name="confirsenha" placeholder="cofirme sua senha..." maxlength="150" required value=" <?php echo $confirsenha;?>"></li>
	<li><input type="submit" name="acao" value="salvar"></li>
</ul>

</form>	

</div><!--Container pricipal rtecfull -->
</body>
</html>


