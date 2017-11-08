<?php

    $conn = mysqli_connect( 'localhost', 'root', '', 'test');


    $query = "SELECT * FROM veiculos";

    //print_r($query,0);

    if($result = mysqli_query($conn,$query)){

        if(mysqli_num_rows($result) > 0){

            $arrayVeiculos = array();

            for ($i = 0; $i < mysqli_num_rows($result); $i++){
                $veiculoAtual = mysqli_fetch_object($result);

                array_push($arrayVeiculos, $veiculoAtual);
            }
        }

        echo json_encode($arrayVeiculos);
    }
?>