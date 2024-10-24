<?php

// Kelas induk
class PerangkatElektronik {
    public $sumberDaya;

    public function __construct($sumberDaya) {
        $this->sumberDaya = $sumberDaya;
    }

    public function getSumberDaya() {
        return "<strong>Sumber Daya:</strong> " . $this->sumberDaya;
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
        return $this->getSumberDaya() . "<br><strong>Jenis:</strong> " . $this->jenis;
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
        return $this->getDetail() . "<br><strong>Ukuran Layar:</strong> " . $this->ukuranLayar . " inci";
    }
}

// Fungsi untuk membuat tampilan lebih keren
function tampilkanDetailLaptop($laptop) {
    echo "<div style='font-family: Arial, sans-serif; border: 2px solid #3498db; border-radius: 10px; padding: 20px; max-width: 400px; margin: auto; background-color: #f4f4f9;'>";
    echo "<h2 style='color: #3498db; text-align: center;'>Detail Perangkat Laptop</h2>";
    echo "<p>" . $laptop->getDetailLengkap() . "</p>";
    echo "<hr style='border: 0; border-top: 1px solid #3498db;'>";
    echo "<p style='text-align: center;'></p>";
    echo "</div>";
}

// Contoh penggunaan
$laptopSaya = new Laptop("Baterai", "Ultrabook", 15.6);
tampilkanDetailLaptop($laptopSaya);

?>