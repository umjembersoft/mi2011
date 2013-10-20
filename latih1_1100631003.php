<?php

//header("Content-Type: application/json");
echo json_encode(array("id"=>"100000717916555")) . "\n";
$obj = new stdClass();
$obj ->name = "Arief Prayugo"; 
echo json_encode($obj) . "\n";

?>