<?php

//header("Content-Type: application/json");
echo json_encode(array("id"=>"100000800383329")) . "\n";
$obj = new stdClass();
$obj ->name = "Ary.Drumer";
echo json_encode($obj) . "\n";

?>