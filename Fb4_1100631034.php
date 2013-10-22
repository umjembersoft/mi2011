<?php
$data=json_encode(array("Test"=>"Encode Facebook"))."\n";
$obj=new stdClass();
$obj->id="100000800383329";
$obj->name="Siti Arbaiyah";
$obj->first_name= "Ary";

echo json_encode($obj)."\n";


?>
