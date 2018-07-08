<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST"){

    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);
	
    $text = $json->queryResult->parameters->Param;

    $Speech = $text;

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
