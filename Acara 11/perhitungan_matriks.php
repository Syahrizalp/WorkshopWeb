<?php
// Fungsi untuk menjumlahkan dua matriks
function tambahMatriks($A, $B) {
    $baris = count($A);
    $kolom = count($A[0]);
    $C = array();

    for ($i = 0; $i < $baris; $i++) {
        for ($j = 0; $j < $kolom; $j++) {
            $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
        }
    }

    return $C;
}

// Fungsi untuk menampilkan matriks
function tampilMatriks($M) {
    $baris = count($M);
    $kolom = count($M[0]);

    for ($i = 0; $i < $baris; $i++) {
        for ($j = 0; $j < $kolom; $j++) {
            echo $M[$i][$j] . " ";
        }
        echo "<br>";
    }
}

// Matriks A
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks B
$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Hitung hasil penjumlahan
$C = tambahMatriks($A, $B);

// Tampilkan hasil
echo "Matriks A:<br>";
tampilMatriks($A);

echo "<br>Matriks B:<br>";
tampilMatriks($B);

echo "<br>Hasil A + B:<br>";
tampilMatriks($C);
?>
