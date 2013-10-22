<?php
$data=json_encode(array("Tugas"=>"EncodeBiodata"))."\n";
$obj=new stdClass();
$obj->NIM="1100631034";
$obj->Name="Siti Arbaiyah";
$obj->Alamat= "Jl.karimata - Jember";
$obj->TempatTanggalLahir= "Jember,23 Maret 1992";
$obj->Jurusan= "Teknik Manajemen Informatika";
$obj->Angkatan= "2011";
$obj->Kelas = "B";
echo json_encode($obj)."\n";


?>
