<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

echo "1. Kubus <br>";

$sisi = 8;
$vKubus = $sisi * $sisi * $sisi;
echo "Sisi : " . $sisi . " cm <br>";
echo "Volume Kubus : s * s * s = " . $vKubus . " cm";
echo "<br><br>";

echo "2. Balok <br>";

$panjang = 8;
$lebar = 4;
$tinggi = 6;
$vBalok = $panjang * $lebar * $tinggi;
echo "Panjang : " . $panjang . " cm <br>";
echo "Lebar : " . $lebar . " cm <br>";
echo "Tinggi : " . $tinggi . " cm <br>";
echo "Volume Balok : p * l * t = " . $vBalok . " cm";
echo "<br><br>";

echo "3. Tabung <br>";

$r = 2;
$t = 6;
$lipat = 7;

if ($hasil = $r % $lipat == 0) {
  $vTabung = 22 / 7 * ($r * $r) *  $t;
} else {
  $vTabung = 3.14  * ($r * $r) *  $t;
}

echo "Pi : 22/7 || 3.14 <br>";
echo "Jari-jari : " . $r . " cm <br>";
echo "Tinggi : " . $t . " cm <br>";
echo "Volume Tabung : pi * (r * r) * t = " . $vTabung . " cm";
echo "<br><br>";
