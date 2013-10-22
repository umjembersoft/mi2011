<?php

$json = ('{"id": "100001773639240",
   "name": "Lucky Anugerah Pratama",
   "first_name": "Lucky",
   "middle_name": "Anugerah",
   "last_name": "Pratama",
   "link": "http://www.facebook.com/luckyz.pratamaz",
   "username": "luckyz.pratamaz",
   "gender": "male",
   "locale": "id_ID"}')."\n";

var_dump(json_decode($json));
var_dump(json_decode($json, true));

?>
