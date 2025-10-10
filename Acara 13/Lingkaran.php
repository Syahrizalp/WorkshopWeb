<?php
include_once 'hitungLuas.php';
class Lingkaran implements hitungLuas {
    public function hitungLuasPersegi($sisi) {}
    public function hitungLuasSegitiga($alas, $tinggi) {}
    public function hitungLuasLingkaran($jari) {
        return 3.14 * $jari * $jari;
    }
}
?>