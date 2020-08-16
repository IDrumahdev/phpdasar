<?php
// Array
// Array adalah sebuah Variabel yang dapat menampung lebih dari satu nilai dan type datanya boleh beda. Pasangan antara key (index dimulai dari nol) dengan value.

// $nama ="ibnudirsan";
// $hari1 = "senin";
// $hari2 = "selasa";

// cara membuat array 
// cara lama :
$hari = array("senin","selasa","rabu");
// cara baru : 
$bulan = ["Januari","Februari","Maret"];
// type data yang beda
$arr1 = [123,"tulisan",false];

// menampilkan array
// echo $hari; //salah
var_dump ($hari);
echo "<br>";
print_r($bulan);

echo "<hr>";

// Menampilkan 1 elemen pada array
echo $arr1[0];

echo "<hr>";

echo $bulan[1];

// menambahkan elemen baru pada array
echo "<hr>";

var_dump($hari);
$hari[]="kamis";
$hari[]="jum'at";

echo "<hr>";

var_dump($hari);

?>