<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST"){

 	$json_str = file_get_contents("php://input");
	$json_obj = json_decode($json_str);
	
	echo "POST recebido";
	
}
else {
	
    echo "metodo nao permitido";
}

?>
