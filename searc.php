<?php include_once"config.php";  ?>

<?php 

 $busca = $_GET['busca'];



 $result_name = "SELECT * FROM  clientes_adm WHERE nome like '%$busca%'";/*like é para pesquisa mais aprofundada em vez de usaar apenas =variavel*/
 $resultado = mysqli_query($conex, $result_name);

 while ($linha = mysqli_fetch_array($resultado)) {
 	echo $nome = $linha['nome'];
    echo '<a href=delc.php?id='.$linha['id'] .'>Deletar</a> | <a href=edit.php?id='.$linha['id'] .'>editar</a>';
 	echo '<br>';
 }








 ?>