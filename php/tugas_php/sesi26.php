<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

// Nomer 1
for ($i = 1; $i <= 10; $i++) {
  if ($i % 2 == 1)
    echo "$i adalah bilangan ganjil <br>";
  else {
    echo "$i adalah bilangan genap <br>";
  }
}
echo "<br>";

// Nomer 2
for ($thn = 2000; $thn < 2024; $thn++) {
  if ($thn % 4 == 0)
    echo "Tahun $thn adalah tahun kabisat <br>";
  else {
    echo "Tahun $thn bukan tahun kabisat <br>";
  }
}
echo "<br>";

// Nomer 3
for ($i = 9; $i >= 1; $i--) {
  for ($j = 1; $j <= $i; $j++) {
    echo "$j";
  }
  echo "<br>";
}
