<?php
echo json_encode(array("NIM"=>"1100631026"));
$object = new stdClass();
$object ->Nama = "Helmi Mahfudhatul Harum";
$object ->Alamat = "Puger";
$object ->Ttl = "Jember, 18 September 1993";
$object ->Jurusan = "Manajemen Informatika";
$object ->Angkatan = "2011";
$object ->Kelas = "A";
echo json_encode($object);

?>