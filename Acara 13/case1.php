<?php
// membuat interface Tanah
interface Tanah {
    public function hitungLuas();
}

// membuat abstract class Bibit
abstract class Bibit {
    abstract public function ditanami();
}

// extends Bibit dan implements Tanah
class Lingkaran extends Bibit implements Tanah {
    private $jariJari;
    private $pi = 3.14;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    // menghitung luas tanah berbentuk lingkaran
    // implement method dari interface Tanah
    public function hitungLuas() {
        return $this->jariJari * $this->jariJari * $this->pi;
    }

    // tanah ditanami Kopi
    // override method dari abstract class Bibit
    public function ditanami() {
        return "ditanami Kopi.";
    }
}

class PersegiPanjang extends Bibit implements Tanah {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar   = $lebar;
    }

    // menghitung luas tanah berbentuk persegi panjang
    // implement method dari interface Tanah
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    // tanah ditanami Padi
    // override method dari abstract class Bibit
    public function ditanami() {
        return "ditanami Padi.";
    }
}

// --- Demo ---
$tanahAgus    = new Lingkaran(3);
$tanahChandra = new PersegiPanjang(3, 4);

echo "Tanah Agus - luas = " . $tanahAgus->hitungLuas() . " m2 \n";
echo $tanahAgus->ditanami() . "\n";

echo "Tanah Chandra - luas = " . $tanahChandra->hitungLuas() . " m2 \n";
echo $tanahChandra->ditanami() . "\n";
