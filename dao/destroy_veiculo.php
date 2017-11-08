<?php
$id = intval($_REQUEST['id']);

$conn = mysqli_connect( 'localhost', 'root', '', 'test');

$query = "DELETE 
          FROM veiculos 
          WHERE id=$id";

if(mysqli_query($conn, $query)){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Erro ao Excluir Veículo'));
}
?>