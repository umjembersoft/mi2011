<?php
$url="https://graph.facebook.com/riie.clamanyy";
$data=  json_decode(file_get_contents($url),TRUE);

echo "<pre>";
print_r($data) ."\n";
echo "</pre>";
echo"<br/> <br\>";
?>
