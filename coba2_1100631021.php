<?php

//header("Content-Type: application/json");
echo json_encode(array("id"=>"100000716277483")) . "\n";
$obj = new stdClass();
$obj ->name = "Iin El Mutmainnah";
echo json_encode($obj) . "\n";

?>