<?php
$id = intval($_REQUEST['id']);
$nome = htmlspecialchars($_REQUEST['nome']);
$modelo = htmlspecialchars($_REQUEST['modelo']);
$ano = htmlspecialchars($_REQUEST['ano']);

$conn = mysqli_connect( 'localhost', 'root', '', 'test');

$query = "UPDATE veiculos 
          SET nome  ='$nome',
              modelo='$modelo',
              ano   ='$ano'
          WHERE id = $id";

if(mysqli_query($conn,$query)){
	echo json_encode(array(
		'id' => $id,
		'nome' => $nome,
		'modelo' => $modelo,
		'ano' => $ano ));
} else {
	echo json_encode(array('errorMsg'=>'Erro ao Editar Veículo'));
}
?>