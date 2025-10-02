<?php
class Kendaraan {
    protected $merk;
    protected $tahun;

    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function tampilkanInformasi() {
        echo "Merk: " . $this->merk . "<br>";
        echo "Tahun: " . $this->tahun . "<br>";
    }
}

class Mobil extends Kendaraan {
    private $warna;

    public function __construct($merk, $tahun, $warna) {
        parent::__construct($merk, $tahun);
        $this->warna = $warna;
    }

    public function tampilkanInformasi() {
        parent::tampilkanInformasi();
        echo "Warna: " . $this->warna . "<br>";
    }

    public function klakson() {
        echo "Mobil berbunyi klakson<br>";
    }
}

$mobil = new Mobil("Toyota", 2022, "Merah");
$mobil->tampilkanInformasi();
$mobil->klakson();
?>
