<?php

$url = "http://graph.facebook.com/helmi.lovely";
$a = json_decode(file_get_contents($url), true);

echo "<pre>";
print_r ($a) . "\n";
echo "</pre>";

echo "<br \> <br \>";
?>