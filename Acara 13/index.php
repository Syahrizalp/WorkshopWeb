<?php
include 'Persegi.php';
include 'Segitiga.php';
include 'Lingkaran.php';

$persegi = new Persegi();
$segitiga = new Segitiga();
$lingkaran = new Lingkaran();

echo "Luas Persegi (sisi 4): " . $persegi->hitungLuasPersegi(4) . "<br>";
echo "Luas Segitiga (alas 6, tinggi 8): " . $segitiga->hitungLuasSegitiga(6, 8) . "<br>";
echo "Luas Lingkaran (jari 7): " . $lingkaran->hitungLuasLingkaran(7);
?>