<?php

// Kelas induk
class PerangkatElektronik {
    public $sumberDaya;

    public function __construct($sumberDaya) {
        $this->sumberDaya = $sumberDaya;
    }

    public function getSumberDaya() {
        return "Sumber Daya: " . $this->sumberDaya;
    }
}

// Kelas turunan yang mewarisi dari PerangkatElektronik
class Komputer extends PerangkatElektronik {
    public $jenis;

    public function __construct($sumberDaya, $jenis) {
        parent::__construct($sumberDaya);
        $this->jenis = $jenis;
    }

    public function getDetail() {
        return $this->getSumberDaya() . ", Jenis: " . $this->jenis;
    }
}

// Kelas cucu yang mewarisi dari Komputer
class Laptop extends Komputer {
    public $ukuranLayar;

    public function __construct($sumberDaya, $jenis, $ukuranLayar) {
        parent::__construct($sumberDaya, $jenis);
        $this->ukuranLayar = $ukuranLayar;
    }

    public function getDetailLengkap() {
        return $this->getDetail() . ", Ukuran Layar: " . $this->ukuranLayar . " inci";
    }
}

// Contoh penggunaan
$laptopSaya = new Laptop("Baterai", "Macbook", 15.6);
echo $laptopSaya->getDetailLengkap();