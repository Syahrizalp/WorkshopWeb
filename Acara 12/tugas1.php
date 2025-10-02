<?php
class mobilLengkap {
    public function nontonTV() {
        echo "TV dihidupkan<br>TV mencari channel<br>TV menampilkan gambar<br>";
    }
    public function hidupkanMobil() { echo "Mobil dihidupkan<br>"; }
    public function matikanMobil()  { echo "Mobil dimatikan<br>"; }
    public function ubahGigi($gigi) { echo "Gigi diubah ke: {$gigi}<br>"; }
}

class MobilBMW extends mobilLengkap {}

class MobilBMWberaksi {
    public function nontonTv() {
        $bmw = new MobilBMW();
        $bmw->nontonTV();
    }
    public function HidupkanMobil() {
        $bmw = new MobilBMW();
        $bmw->hidupkanMobil();
    }
    public function MatikanMobil() {
        $bmw = new MobilBMW();
        $bmw->matikanMobil();
    }
    public function ubahGigi($g) {
        $bmw = new MobilBMW();
        $bmw->ubahGigi($g);
    }
}

// Contoh pemakaian:
$aksi = new MobilBMWberaksi();
$aksi->HidupkanMobil();
$aksi->nontonTv();
$aksi->ubahGigi(3);
$aksi->MatikanMobil();
