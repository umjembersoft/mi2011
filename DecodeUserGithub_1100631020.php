<?php
$url="https://api.github.com/users/umjembersoft";
$data=  json_decode(file_get_contents($url),TRUE);

echo "<pre>";
print_r($data) ."\n";
echo "</pre>";
echo"<br/> <br\>";

?>
