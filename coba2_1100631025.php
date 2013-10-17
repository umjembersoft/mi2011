<?php

//header("Content-Type: application/json");
echo json_encode(array("id"=>"100000486794727")) . "\n";
$obj = new stdClass();
$obj ->name = "Asfi Yuli Wulandari";
echo json_encode($obj) . "\n";

?>