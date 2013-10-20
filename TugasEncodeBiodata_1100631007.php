<?php
$data=json_encode(array("Tugas"=>"EncodeBiodata"))."\n";
$obj=new stdClass();
$obj->NIM="1100631007";
$obj->Name="Brian Indra Agatha Hia";
$obj->Alamat= "Jl. PB. Sudirman GG. Setia Karang Asem";
$obj->TempatTanggalLahir= "Situbondo,05 Mei 1993";
$obj->Jurusan= "Teknik Manajemen Informatika";
$obj->Angkatan= "2011";
$obj->Kelas = "A";
echo json_encode($obj)."\n";
?>
