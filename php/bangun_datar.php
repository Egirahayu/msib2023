<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

echo "1. Persegi <br>";

$sisi = 10;
$luasPersegi = $sisi * $sisi;
echo "Sisi : " . $sisi . " cm <br>";
echo "Luas Persegi : s * s = " . $luasPersegi . " cm";
echo "<br><br>";

echo "2. Persegi Panjang <br>";

$panjang = 5;
$lebar = 8;
$luasPersegiPanjang = $panjang * $lebar;
echo "Panjang : " . $panjang . " cm <br>";
echo "Lebar : " . $lebar . " cm <br>";
echo "Luas Persegi Panjang : p * l = " . $luasPersegiPanjang . " cm";
echo "<br><br>";

echo "3. Segitiga <br>";

$alas = 14;
$tinggi = 8;
$luasSegitiga = 1 / 2 * ($alas * $tinggi);
echo "Alas : " . $alas . " cm <br>";
echo "Tinggi : " . $tinggi . " cm <br>";
echo "Luas Segitiga : 1/2 * (a * t) = " . $luasSegitiga . " cm";
echo "<br><br>";

echo "4. Lingkaran <br>";

$jari = 7;
$lipat = 7;
if ($hasil = $jari % $lipat == 0) {
  $luasLingkaran = 22 / 7 * ($jari * $jari);
} else {
  $luasLingkaran = 3.14 * ($jari * $jari);
}
echo "Pi : 22/7 || 3.14 <br>";
echo "Jari-jari : " . $jari . " cm <br>";
echo "Luas Lingkaran : 22/7 || 3.14 * (r * r) = " . $luasLingkaran . " cm";
echo "<br><br>";

echo "5. Trapesium <br>";

$a = 5;
$b = 4;
$t = 7;
$luasTrapesium = 1 / 2 * ($a + $b) * $t;
echo "a : " . $a . " cm <br>";
echo "b : " . $b . " cm <br>";
echo "t : " . $t . " cm <br>";
echo "Luas Lingkaran : 1/2 * (a + b) * t = " . $luasTrapesium . " cm";
