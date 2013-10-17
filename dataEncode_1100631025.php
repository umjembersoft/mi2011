<?php
echo json_encode(array("NIM"=>"1100631015"));
$obj = new stdClass();
$obj ->Nama = "Asfi Yuli wulandari";
$obj ->Alamat = "Gumukmas";
$obj ->Ttl = "Jember, 27 Juli 1993";
$obj ->Jurusan = "Manajemen Informatika";
$obj ->Angkatan = "2011";
$obj ->Kelas = "A";
echo json_encode($obj);

?>