<?php
echo json_encode(array("id"=>"100001894154130"));
$obj = new stdClass();
$obj ->Name = "WaOne Dangers";
$obj ->First_name = "WaOne";
$obj ->Last_name = "Dangers";
$obj ->Username = "waone.dangers";
$obj ->Link = "http://www.facebook.com/waone.dangers";
$obj ->Gender = "male";
$obj ->Locale = "id_ID";
//echo json_encode($obj);

echo "<pre>";
print_r ($obj) . "\n";
echo "</pre>";
echo "<br\><br\>";

?>