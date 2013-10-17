<?php
echo json_encode(array("NIM"=>"1100631021"));
$obj = new stdClass();
$obj ->Nama = "Lailatul Mutmainnah";
$obj ->Alamat = "Kalisat";
$obj ->Ttl = "Jember, 27 Juli 1992";
$obj ->Jurusan = "Manajemen Informatika";
$obj ->Angkatan = "2011";
$obj ->Kelas = "A";
echo json_encode($obj);

?>