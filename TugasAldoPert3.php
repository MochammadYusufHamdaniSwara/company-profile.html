<?php
// Kelas induk
class Kendaraan {
    public $merk;
    public $tahun;

    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function getInfo() {
        return "Merk: " . $this->merk . ", Tahun: " . $this->tahun;
    }
}

// Kelas turunan dari Kendaraan
class Mobil extends Kendaraan {
    public $jenis;

    public function __construct($merk, $tahun, $jenis) {
        parent::__construct($merk, $tahun);
        $this->jenis = $jenis;
    }

    public function getDetailMobil() {
        return $this->getInfo() . ", Jenis: " . $this->jenis;
    }
}

// Contoh penggunaan
$mobilBaru = new Mobil("Toyota", 2021, "SUV");
echo $mobilBaru->getDetailMobil();
?>