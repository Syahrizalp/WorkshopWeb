<?php
$maxBytes = 2 * 1024 * 1024; // ~2MB
$allowed  = ['image/jpeg','image/png','application/pdf'];

if (!isset($_FILES['berkas']) || $_FILES['berkas']['error'] !== UPLOAD_ERR_OK) {
  exit("Upload gagal: tidak ada berkas atau ada error.");
}

$tipe   = function_exists('mime_content_type') ? mime_content_type($_FILES['berkas']['tmp_name']) : ($_FILES['berkas']['type'] ?? '');
$ukuran = $_FILES['berkas']['size'];
$namaAsli = basename($_FILES['berkas']['name']);

if (!in_array($tipe, $allowed)) exit("Tipe tidak diizinkan.");
if ($ukuran > $maxBytes)    exit("Ukuran melebihi 2MB.");

$tujuan = __DIR__ . "/uploads";
if(!is_dir($tujuan)) mkdir($tujuan, 0777, true);

$namaSimpan = $tujuan . "/" . time() . "_" . preg_replace('/[^A-Za-z0-9._-]/','_',$namaAsli);
if (move_uploaded_file($_FILES['berkas']['tmp_name'], $namaSimpan)) {
  echo "Upload berhasil: " . htmlspecialchars(basename($namaSimpan));
} else {
  echo "Gagal menyimpan file.";
}
