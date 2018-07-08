<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST"){

    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);
	
    $text = $json->queryResult->parameters->Param;

    switch($text){
        case "001":
            $Speech = "Teste 01 - OK.";
            break;
        case "002":
            $Speech = "Teste 02 - OK.";
            break;
        default: 
            $Speech = "Teste não Especificado";
            break;
    }

    $response = new \stdClass();
    $response->speech = $Speech;
    $response->displayText = "";
    $response->source = "webhook";
	
    echo json_encode($response);
	
}
else {
	
    echo "metodo nao permitido";
}

?>
