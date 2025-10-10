<?php
include_once 'hitungLuas.php';
class Segitiga implements hitungLuas {
    public function hitungLuasPersegi($sisi) {}
    public function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }
    public function hitungLuasLingkaran($jari) {}
}
?>