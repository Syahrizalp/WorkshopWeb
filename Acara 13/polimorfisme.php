<?php
interface Kendaraan {
    public function tampilkanInformasi();
}
class Mobil implements Kendaraan {
    private $merk;

    public function __construct($merk) {
        $this->merk = $merk;
    }

    public function tampilkanInformasi() {
        echo "Ini adalah mobil dengan merk: " . $this->merk . "<br>";
    }
}
class Motor implements Kendaraan {
    private $merk;

    public function __construct($merk) {
        $this->merk = $merk;
    }
    
    public function tampilkanInformasi() {
        echo "Ini adalah motor dengan merk: " . $this->merk . "<br>";
    }
}
function tampilkanInfoKendaraan(Kendaraan $kendaraan) {
    $kendaraan->tampilkanInformasi();
}
$mobil = new Mobil("Toyota");
$motor = new Motor("Honda");

tampilkanInfoKendaraan($mobil);
tampilkanInfoKendaraan($motor);
?>
