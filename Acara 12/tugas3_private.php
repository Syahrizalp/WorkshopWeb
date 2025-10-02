<?php
class Tablet {
    private $merk;
    private $camera;
    private $memory;
    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk; $this->camera = $camera; $this->memory = $memory;
    }
    private function spesifikasiInternal() {
        return "Merk: {$this->merk}, Kamera: {$this->camera}MP, Memori: {$this->memory}GB";
    }
    public function tampilkanSpesifikasi() {
        echo $this->spesifikasiInternal() . "<br>";
    }
}
class Handphone extends Tablet {
    public $handphone_baru;
    public function beli_handphone($nama) {
        $this->handphone_baru = $nama;
        echo "Membeli handphone: {$this->handphone_baru}<br>";
        $this->tampilkanSpesifikasi();
    }
}

// Contoh:
$hp = new Handphone("Infinix", 108, 512);
$hp->beli_handphone("Infinix Note 12");
