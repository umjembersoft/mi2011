<?php

$json = ('{"id": "100002991883025",
   "name": "Riie Azzrie Clamanyy",
   "first_name": "Riie",
   "middle_name": "Azzrie",
   "last_name": "Clamanyy",
   "link": "http://www.facebook.com/riie.clamanyy",
   "username": "riie.clamanyy",
   "gender": "male",
   "locale": "id_ID"}')."\n";

var_dump(json_decode($json));
var_dump(json_decode($json, true));

?>
