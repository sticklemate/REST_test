<?php

$myFile="https://localhost/testsite/wp-content/VR-Editing-master/public/static_assets/hello-world.json";
$requestPayload = file_get_contents("php://input");

//$object = json_decode($requestPayload);
var_dump($requestPayload);


if(file_put_contents($myFile, $requestPayload)) {
	        echo 'Data successfully saved';
	    }
	   else 
	        echo "error";


?>


