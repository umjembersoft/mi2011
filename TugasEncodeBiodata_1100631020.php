<?php
$data=json_encode(array("Tugas"=>"EncodeBiodata"))."\n";
$obj=new stdClass();
$obj->NIM="1100631020";
$obj->Name="Lucky Anugerah Pratama";
$obj->Alamat= "Prum Griya Gebang Permai L.21";
$obj->TempatTanggalLahir= "Surabaya,12 April 1993";
$obj->Jurusan= "Teknik Manajemen Informatika";
$obj->Angkatan= "2011";
$obj->Kelas = "A";
echo json_encode($obj)."\n";
?>
