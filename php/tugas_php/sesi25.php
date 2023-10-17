<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

// Nomer 1
$bilangan = 2;

if ($bilangan % 2 == 1)
  echo "1. $bilangan adalah bilangan ganjil <br>";
else {
  echo "1. $bilangan adalah bilangan genap <br>";
}

// Nomer 2
$tahun = 2020;

if ($tahun % 4 == 0) {
  echo "2. $tahun tahun kabisat <br>";
} else if ($tahun % 4 != 0) {
  echo "2. $tahun bukan tahun kabisat <br>";
}

// Nomer 3
$nilai =  93;

if ($nilai >= 90 && $nilai <= 100) {
  $indeks = "A";
} else if ($nilai >= 80 && $nilai < 90) {
  $indeks = "B";
} else if ($nilai >= 70 && $nilai < 80) {
  $indeks = "C";
} else if ($nilai >= 60 && $nilai < 70) {
  $indeks = "D";
} else {
  $indeks = "E";
}
echo "3. Nilai kamu $indeks";
