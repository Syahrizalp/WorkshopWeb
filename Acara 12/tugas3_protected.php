<?php
class Tablet {
    protected $merk;
    protected $camera;
    protected $memory;
    public function setSpesifikasi($merk, $camera, $memory) {
        $this->merk = $merk; $this->camera = $camera; $this->memory = $memory;
    }
    protected function spesifikasiInternal() {
        return "Merk: {$this->merk}, Kamera: {$this->camera}MP, Memori: {$this->memory}GB";
    }
}
class Handphone extends Tablet {
    public $handphone_baru;
    public function beli_handphone($nama) {
        $this->handphone_baru = $nama;
        echo "Membeli handphone: {$this->handphone_baru}<br>";
        echo $this->spesifikasiInternal() . "<br>";
    }
}

// Contoh:
$hp = new Handphone();
$hp->setSpesifikasi("Vivo", 50, 256);
$hp->beli_handphone("Vivo Y22");
