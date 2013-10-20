<?php
echo json_encode(array("NIM"=>"1100631003"));
$obj = new stdClass();
$obj ->Nama = "Muhammad Arif Prayugo";
$obj ->Alamat = "Situbondo";
$obj ->Ttl = "Situbondo, 02 April 1993";
$obj ->Jurusan = "Manajemen Informatika";
$obj ->Angkatan = "2011";
$obj ->Kelas = "A";
echo json_encode($obj);

?>