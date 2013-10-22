<?php
$data=json_encode(array("Test"=>"Encode Facebook"))."\n";
$obj=new stdClass();
$obj->id="100002991883025";
$obj->name="Riie Azzrie Clama'nyy";
$obj->first_name= "Riie";

echo json_encode($obj)."\n";

?>
