<?php
echo json_encode(array("NIM"=>"1100631014"));
$obj = new stdClass();
$obj ->Nama = "Kienda Dwi Ajie";
$obj ->Alamat = "Kalisat";
$obj ->Ttl = "Jember, 10 April 1993";
$obj ->Jurusan = "Manajemen Informatika";
$obj ->Angkatan = "2011";
$obj ->Kelas = "A";
//echo json_encode($obj);

echo "<pre>";
print_r ($obj) . "\n";
echo "</pre>";
echo "<br\><br\>";

?>