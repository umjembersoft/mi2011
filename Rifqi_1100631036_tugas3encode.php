<?php
echo json_encode(array("NIM"=>"1100631036"));
$obj = new stdClass();
$obj ->Nama = "Rifqi Hanif Maulana";
$obj ->Alamat = "Ajung City";
$obj ->Ttl = "Jember, 06 Juni 1993";
$obj ->Jurusan = "Manajemen Informatika";
$obj ->Angkatan = "2011";
$obj ->Kelas = "A";
//echo json_encode($obj);

echo "<pre>";
print_r ($obj) . "\n";
echo "</pre>";
echo "<br\><br\>";

?>