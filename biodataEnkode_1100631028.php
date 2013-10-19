<?php
echo json_encode(array("NIM"=>"1100631028"));
$objek = new stdClass();
$objek ->Nama = "Edwin Prassetyo";
$objek ->Alamat = "Puger-Jember";
$objek ->Ttl = "Jember, 31 Maret 1992";
$objek ->Jurusan = "Manajemen Informatika";
$objek ->Angkatan = "2011";
$objek ->Kelas = "A";
echo json_encode($objek);

?>