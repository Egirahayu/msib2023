<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

// Nomer 1
$array = array("satu", "dua", "tiga", "empat", "lima");
echo $array[4] . "<br>";
echo $array[3] . "<br>";
echo $array[2] . "<br>";
echo $array[1] . "<br>";
echo $array[0] . "<br><br>";

// Nomer 2
$arrayBuah = array("Apel", "Nanas", "Mangga", "Jeruk", "Manggis");
echo "Terdapat " . count($arrayBuah) . " buah. <br><br>";

// Nomer 3 
$arrayAngka = array(7, 3, 4, 9, 6);
echo "Totalnya adalah " . array_sum($arrayAngka) . ". <br><br>";

// Nomer 4
for ($i = 1; $i <= 10; $i++) {
  $hasil = 1 * $i;
  echo "1 x " . $i . " = " . $hasil . "<br>";
}
