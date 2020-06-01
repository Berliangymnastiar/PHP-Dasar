<?php
//array, adalah variabel yang dapat memiliki banyak nilai
//pasangan antara key and value
//Key-nya adalah index yang dimulai dari 0
//Element pada array boleh beda
//cara lama
$hari = array ("Senin", "Selasa", "Rabu");
//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [17,"Sabtu", "Januari"];
$tahun = [2017,2018,2019];

//Menampilkan array
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($bulan);
echo "<br>";
print_r($tahun);
//menampilkan 1 element pada array
echo $arr1[0];
echo "<br>";
echo $hari[2];
echo "<br>";
echo $tahun[1];
//menambahkan element baru pada array
// var_dump($bulan);
// $bulan[] = "April";
// $bulan[] = "Juni";
// echo "<br>";
// var_dump($bulan);
