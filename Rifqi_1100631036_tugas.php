<?php
$url = "http://graph.facebook.com/kiekey.uchihaii";
$data = json_decode(file_get_contents($url), true);

echo "<pre>";
print_r ($data) . "\n";
echo "</pre>";
echo "<br\><br\>";

?>