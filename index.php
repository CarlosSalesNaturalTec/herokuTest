<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);
    $text = $json->queryResult->parameters->Param;

    switch($text){
        case "001":
            $speech = "Teste 01 - OK.";
            break;
        case "002":
            $speech = "Teste 02 - OK.";
            break;
        default: 
            $speech = "Teste não Especificado";
            break;
    }

    $response = new \stdClass();
    $response->speech = "";
    $response->displayText = "";
    $response->source = "webhook";
    echo json_encode($response);


else {
    echo "method not allowed";
}

?>
