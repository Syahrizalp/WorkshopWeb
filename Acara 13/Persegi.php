<?php
include_once 'hitungLuas.php';
class Persegi implements hitungLuas {
    public function hitungLuasPersegi($sisi) {
        return $sisi * $sisi;
    }
    public function hitungLuasSegitiga($alas, $tinggi) {}
    public function hitungLuasLingkaran($jari) {}
}
?>