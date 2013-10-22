<?php
$data=json_encode(array("Test"=>"Encode Facebook"))."\n";
$obj=new stdClass();
$obj->id="100001773639240";
$obj->name="Lucky Anugerah Pratama";
$obj->first_name= "Lucky";

echo json_encode($obj)."\n";

?>
