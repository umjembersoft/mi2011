<?php

//header("Content-Type: application/json");
echo json_encode(array("id"=>"100003708356202")) . "\n";
$obj = new stdClass();
$obj ->name = "Kienda Siie Crewedt";
echo json_encode($obj) . "\n";

?>