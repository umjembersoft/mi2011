<?php
$url="https://graph.facebook.com/luckyz.pratamaz";
$lucky =json_decode(file_get_contents($url));

print_r($lucky);
echo "<br/>";

?>
