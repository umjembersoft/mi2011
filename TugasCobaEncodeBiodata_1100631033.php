<?php
$data=json_encode(array("Tugas"=>"EncodeBiodata"))."\n";
$obj=new stdClass();
$obj->NIM="1100631033";
$obj->Name="Mochammad Sobri Naharisa";
$obj->Alamat= "Prum Sumber Sari Permai 1 i.23";
$obj->TempatTanggalLahir= "Jember,17 April 1993";
$obj->Jurusan= "Teknik Manajemen Informatika";
$obj->Angkatan= "2011";
$obj->Kelas = "B";
echo json_encode($obj)."\n";
?>
