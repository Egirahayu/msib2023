<?php
// Mohamad Egi Rahayu
// Universitas Pasundan
// Full Stack 01

$mahasiswa = [
  ["Egi", "22", "Full Stack"],
  ["Andre", "21", "Front-end Dev"],
  ["Fajar", "20", "Backend Dev"]
];

foreach ($mahasiswa as $mhs) {
  echo "Nama : " . $mhs[0] . ", Umur : " . $mhs[1] . " tahun, Kelas : " . $mhs[2] . "<br>";
}
