<?php
echo json_encode(array("NIM"=>"1100631004"));
$obj = new stdClass ();
$obj ->Nama = "Ricky Anas Prayogo";
$obj ->Alamat = "Jelbuk";
$obj ->Ttl = "Jember, 26 April 1992";
$obj ->Jurusan = "Manajemen informatika";
$obj ->Angkatan = "2011";
$obj ->Kelas = "A";

echo "<pre>";
print_r ($obj) . "\n";
echo "</pre>";
echo "<br\><br\>";
?>
