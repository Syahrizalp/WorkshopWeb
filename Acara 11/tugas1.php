<?php
// Fungsi untuk mencari bilangan terbesar dari 2 bilangan
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
$bil1 = 100;
$bil2 = 150;

echo "Bilangan pertama: $bil1 <br>";
echo "Bilangan kedua: $bil2 <br>";
echo "Bilangan terbesar adalah: " . bilanganTerbesar($bil1, $bil2);
?>
