<?php
$url="https://graph.facebook.com/luckyz.pratamaz";
$data=  json_decode(file_get_contents($url),TRUE);

echo "<pre>";
print_r($data) ."\n";
echo "</pre>";
echo"<br/> <br\>";
?>
