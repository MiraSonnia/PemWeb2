<?php

// Array Index
$animals = ['Macan', 'Kucing', 'Beruang', 'Ayam'];

//menambahkan data ke aray
array_push($animals,"kambing");

// Mengakses Array Index
echo $animals[2];
//var_dump($animals);

// Array Assosiatif
$animal = [
    'nama' = $animals[1],
    'jenis' => 'Karnivora'
    'usia' => '4 bulan'
] 

// Mengakses Array Assosiatif
echo $animal['jenis'];