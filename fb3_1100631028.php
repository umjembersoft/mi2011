<?php

$url = "http://graph.facebook.com/edwinz.prazz";
$n = json_decode(file_get_contents($url), true);

echo "<pre>";
print_r ($n) . "\n";
echo "</pre>";

echo "<br \> <br \>";
?>