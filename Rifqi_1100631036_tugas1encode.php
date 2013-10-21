<?php
echo json_encode(array("id"=>"100004002019318"));
$obj = new stdClass();
$obj ->Name = "Kiekey Uchiha II";
$obj ->First_name = "Kiekey";
$obj ->Last_name = "Uchiha II";
$obj ->Username = "kiekey.uchihaii";
$obj ->Link = "http://www.facebook.com/kiekey.uchihaii";
$obj ->Gender = "male";
$obj ->Locale = "id_ID";
//echo json_encode($obj);

echo "<pre>";
print_r ($obj) . "\n";
echo "</pre>";
echo "<br\><br\>";

?>