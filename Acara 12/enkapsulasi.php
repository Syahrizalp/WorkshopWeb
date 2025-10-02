<?php
class Mobil {
    public $merk;        // Akses publik (dapat diakses dari luar kelas)
    protected $tahun;    // Akses protected (hanya dapat diakses dari dalam kelas dan kelas turunan)
    private $harga;      // Akses private (hanya dapat diakses dari dalam kelas)
    // Setter untuk harga
    public function setHarga($harga) {
        $this->harga = $harga;
    }
    // Getter untuk harga
    public function getHarga() {
        return $this->harga;
    }
    // Method protected untuk menghitung pajak
    protected function hitungPajak() {
        return $this->harga * 0.1; // Pajak 10% dari harga mobil
    }
    // Method untuk menampilkan informasi mobil
    public function tampilkanInformasi() {
        echo "Merk Mobil: " . $this->merk . "<br>";
        echo "Tahun Pembuatan: " . $this->tahun . "<br>";
        echo "Harga Mobil: " . $this->getHarga() . "<br>";
        echo "Pajak: " . $this->hitungPajak() . "<br>";
    }
}
// Membuat objek mobil
$mobil = new Mobil();
$mobil->merk = "Toyota";              // Mengatur nilai merk secara langsung (akses publik)
$mobil->setHarga(200000000);          // Mengatur nilai harga menggunakan method (akses publik)
$mobil->tampilkanInformasi();         // Menampilkan informasi mobil
?>
