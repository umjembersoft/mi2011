
<?php
echo json_encode(array("id"=>"100004932337531"));
$obj = new stdClass();
$obj ->Name = "Ricky Anas Prayogo";
$obj ->First_name = "Ricky Anas";
$obj ->Last_name = "Prayogo";
$obj ->Username = "rickyanas.prayogo.7";
$obj ->Link = "http://www.facebook.com/rickyanas.prayogo.7";
$obj ->Gender = "male";
$obj ->Locale = "id_ID";
//echo json_encode($obj);

echo "<pre>";
print_r ($obj) . "\n";
echo "</pre>";
echo "<br\><br\>";

?>