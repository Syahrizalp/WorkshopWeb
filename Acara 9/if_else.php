<?php
$umur = 18;
if ($umur >= 18) {
    echo "Anda sudah dewasa.";
} else { 
    echo "Anda belum dewasa.";
}

echo "<br>";

$nilai = 75;
if ($nilai >= 90) {
 echo "Nilai Anda A.";
} elseif ($nilai >= 80) {
 echo "Nilai Anda B.";
} elseif ($nilai >= 70) {
 echo "Nilai Anda C.";
} else {
 echo "Nilai Anda D.";
}
?>