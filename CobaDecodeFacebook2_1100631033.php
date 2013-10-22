<?php
$url="https://graph.facebook.com/riie.clamanyy";
$riie =json_decode(file_get_contents($url));

print_r($riie);
echo "<br/>";

?>
