
<?php include_once"config.php";?>
<?php 


		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$confirsenha = $_POST['confirsenha'];

$mysql = "UPDATE `clientes_adm` SET nome='$nome', email='$email',senha='$senha',confirsenha='$confirsenha'  WHERE id='$id'";
//$mysql = "UPDATE `clientes_adm` SET `nome`='$nome',`email`='$email',`senha`='$senha',`confirsenha`='$confirsenha' WHERE id='$id'";


if (mysqli_query($conex, $mysql)) {
	header("location:addtbc.php");
}else{
	echo "ERRO DE CONEXÃO 001" . $mysql . mysqli_error($conex);/*001 conexao ao banco de dados*/
}
mysqli_close($conex);

//if ($conex->query($mysql) === TRUE) {
 // echo "Record updated successfully";
//} else {
  //echo "Error updating record: " . $conn->error;
//
//


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
		<li><h2>atualizar</h2></li>
	</ul>
<ul>

	<ul>
<li><input type="text" name="nome" placeholder="digite seu nome..." maxlength="150" required value="<?php echo $nome; ?>"></li>	

    <li><input type="text" name="email" placeholder="digite seu email..." maxlength="150" required value=" <?php echo $email;?>"></li>
	<li><input type="password" name="senha" placeholder="digite sua senha..." maxlength="150" required value=" <?php echo $senha;?>"></li>
	<li><input type="password" name="confirsenha" placeholder="cofirme sua senha..." maxlength="150" required value=" <?php echo $confirsenha;?>"></li>
	<li><input type="submit" name="acao" value="salvar"></li>
	</ul>

</form>	

</div><!--Container pricipal rtecfull -->
</body>
</html>


