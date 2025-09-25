<?php
// Mengambil informasi tanggal saat ini
$tanggalSekarang = getdate();

// Ambil elemen tanggal, bulan, dan tahun
$hari   = $tanggalSekarang['mday'];   // Tanggal (1–31)
$bulan  = $tanggalSekarang['mon'];    // Bulan (1–12)
$tahun  = $tanggalSekarang['year'];   // Tahun (4 digit)

// Tampilkan dengan format dd-mm-yyyy
echo "Tanggal hari ini: " . $hari . "-" . $bulan . "-" . $tahun;
?>
