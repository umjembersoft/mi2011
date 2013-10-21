<?php
echo json_encode(array("NIM"=>"1100631015"));
$obj = new stdClass();
$obj ->Nama = "Wawan Kurniawan";
$obj ->Alamat = "Tempurejo";
$obj ->Ttl = "Jember, 01 Januari 1992";
$obj ->Jurusan = "Manajemen Informatika";
$obj ->Angkatan = "2011";
$obj ->Kelas = "A";
//echo json_encode($obj);

echo "<pre>";
print_r ($obj) . "\n";
echo "</pre>";
echo "<br\><br\>";

?>