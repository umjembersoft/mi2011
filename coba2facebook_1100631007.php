<?php

//header("Content-Type: application/json");
echo json_encode(array("id"=>"100000313831851")) . "\n";
$obj = new stdClass();
$obj ->name = "Brian Indra";
echo json_encode($obj) . "\n";

?>