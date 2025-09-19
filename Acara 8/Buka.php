<?php
// Buka.php — membaca isi Polije.txt dan menampilkannya
$namaFile = __DIR__ . DIRECTORY_SEPARATOR . "Polije.txt";

if (file_exists($namaFile)) {
    $isi = file_get_contents($namaFile);
    echo nl2br(htmlspecialchars($isi));
} else {
    echo "File Polije.txt belum ada.";
}
