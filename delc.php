<?php include_once"config.php";?><!---->

<?php

$id = $_GET['id'];

$mysql = "DELETE FROM `clientes_adm` WHERE `clientes_adm`.`id` = $id";/*uffffffff*/

if (mysqli_query($conex,$mysql)) {
	header("location: addtbc.php");
}else{
	echo "deu erro ";
}




?>