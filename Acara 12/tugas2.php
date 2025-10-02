<?php
class ItemProduk {
    public function ukuran($ukuran) { echo "Ukuran: {$ukuran}<br>"; }
    public function warna($warna)   { echo "Warna: {$warna}<br>"; }
    public function nama($nama)     { echo "Nama: {$nama}<br>"; }
}

class Topi extends ItemProduk {
    public $model;
    public function setModel($model) { $this->model = $model; }
    public function info() {
        $this->nama("Topi {$this->model}");
    }
}

class Celana extends ItemProduk {
    public $tipe;
    public $model;
    public function setSpesifikasi($tipe, $model) { $this->tipe = $tipe; $this->model = $model; }
    public function info() {
        $this->nama("Celana {$this->tipe} {$this->model}");
    }
}

class Baju extends ItemProduk {
    public $tipe;
    public function setTipe($tipe) { $this->tipe = $tipe; }
    public function info() {
        $this->nama("Baju {$this->tipe}");
    }
}

// Contoh pemakaian singkat:
$topi = new Topi(); $topi->setModel("Bucket"); $topi->info(); $topi->ukuran("M"); $topi->warna("Hitam");
$cel = new Celana(); $cel->setSpesifikasi("Jeans","Slim"); $cel->info(); $cel->ukuran("32"); $cel->warna("Biru");
$baju = new Baju(); $baju->setTipe("Kemeja"); $baju->info(); $baju->ukuran("L"); $baju->warna("Putih");
