
<?php include_once"config.php";  ?>
<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirsenha = $_POST['confirsenha'];

$mysql = "INSERT INTO clientes_adm (nome,email,senha,confirsenha) VALUES('$nome','$email','$senha','$confirsenha')";


if (mysqli_query($conex,$mysql)) {
	header("location:addtbc.php");
}else{
	echo "deu erro 001" . $mysql . mysqli_error($conex);/*001 conexao ao banco de dados*/
};
mysqli_close($conex);












  ?>