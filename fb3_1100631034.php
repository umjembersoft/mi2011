<?php
$url="http://graph.facebook.com/ary.drumer";
$data=  json_decode(file_get_contents($url),TRUE);

echo "<pre>";
print_r($data) ."\n";
echo "</pre>";
echo"<br/> <br\>";

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
