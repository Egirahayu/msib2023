<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

$nilai =  92;

switch (true) {
  case ($nilai >= 90 && $nilai <= 100):
    $indeks = "A";
    break;
  case ($nilai >= 80 && $nilai < 90):
    $indeks = "B";
    break;
  case ($nilai >= 70 && $nilai < 80):
    $indeks = "C";
    break;
  default:
    $indeks = "D";
    break;
}

echo "Nilai : " . $nilai . "<br>";
echo "Indeks : " . $indeks . "";
