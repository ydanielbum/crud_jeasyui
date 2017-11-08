<?php

$nome = htmlspecialchars($_REQUEST['nome']);
$modelo = htmlspecialchars($_REQUEST['modelo']);
$ano = htmlspecialchars($_REQUEST['ano']);

$conn = mysqli_connect( 'localhost', 'root', '', 'test');

$query = "INSERT 
          INTO veiculos(nome,modelo,ano) 
          VALUES('$nome','$modelo','$ano')";

if(mysqli_query($conn,$query)){
	echo json_encode(array(
		'id' => mysqli_insert_id($conn),
		'nome' => $nome,
		'modelo' => $modelo,
		'ano' => $ano ));
}else {
	echo json_encode(array('errorMsg'=>'Erro ao Cadastrar Veículo'));
}
?>