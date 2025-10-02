<?php
class Tablet {
    public $merk;
    public $camera;
    public $memory;
    public function spesifikasi() {
        echo "Merk: {$this->merk}, Kamera: {$this->camera}MP, Memori: {$this->memory}GB<br>";
    }
}
class Handphone extends Tablet {
    public $handphone_baru;
    public function beli_handphone($nama) {
        $this->handphone_baru = $nama;
        echo "Membeli handphone: {$this->handphone_baru}<br>";
    }
}

// Contoh:
$hp = new Handphone();
$hp->merk = "Samsung"; $hp->camera = 64; $hp->memory = 128;
$hp->spesifikasi();
$hp->beli_handphone("Samsung S10");
