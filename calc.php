<?php

class KalkulatorIMT {
    private $tanggalLahir;
    private $jenisKelamin;
    private $tinggiBadan;
    private $beratBadan;
    private $imt;
    private $kategoriBeratBadan;

    public function __construct($tanggalLahir, $jenisKelamin, $tinggiBadan, $beratBadan) {
        $this->tanggalLahir = $tanggalLahir;
        $this->jenisKelamin = $jenisKelamin;
        $this->tinggiBadan = $tinggiBadan;
        $this->beratBadan = $beratBadan;
        $this->hitungIMT();
        $this->tentukanKategoriBeratBadan();
    }

    private function hitungIMT() {
        $this->imt = $this->beratBadan / pow(($this->tinggiBadan / 100), 2);
    }

    private function tentukanKategoriBeratBadan() {
        if ($this->jenisKelamin === "laki-laki") {
            if ($this->imt < 18.5) {
                $this->kategoriBeratBadan = "Kekurangan Berat Badan";
            } else if ($this->imt >= 18.5 && $this->imt <= 22.9) {
                $this->kategoriBeratBadan = "Sehat";
            } else if ($this->imt >= 23 && $this->imt <= 29.9) {
                $this->kategoriBeratBadan = "Kelebihan Berat Badan";
            } else {
                $this->kategoriBeratBadan = "Obesitas";
            }
        } else if ($this->jenisKelamin === "perempuan") {
            if ($this->imt < 17) {
                $this->kategoriBeratBadan = "Kekurangan Berat Badan";
            } else if ($this->imt >= 17 && $this->imt <= 23) {
                $this->kategoriBeratBadan = "Sehat";
            } else if ($this->imt >= 23 && $this->imt <= 27) {
                $this->kategoriBeratBadan = "Kelebihan Berat Badan";
            } else {
                $this->kategoriBeratBadan = "Obesitas";
            }
        }
    }

    public function getIMT() {
        return number_format($this->imt, 2, '.', ',');
    }

    public function getKategoriBeratBadan() {
        return $this->kategoriBeratBadan;
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil IMT</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <?php
            // Mendapatkan data dari form
            $tanggalLahir = $_POST['tanggal_lahir'];
            $jenisKelamin = $_POST['jenis_kelamin'];
            $tinggiBadan = $_POST['tinggi_badan'];
            $beratBadan = $_POST['berat_badan'];       
            $nama_lengkap = $_POST['nama']; 
            // Buat objek KalkulatorIMT
            $kalkulator = new KalkulatorIMT($tanggalLahir, $jenisKelamin, $tinggiBadan, $beratBadan);       
            // Hitung dan tampilkan hasil
            $imt = $kalkulator->getIMT();
            $kategoriBeratBadan = $kalkulator->getKategoriBeratBadan();     
            
        ?>
        <div class="container2">
            <div class="hasil">
                <div class="kategori"><?php echo "<p>Nama Lengkap: {$nama_lengkap}</p>"?></div>
                <div class="imt"><?php echo "<p>IMT Anda: {$imt}</p>";?></div><br>
                <div class="kategori"><?php echo "<p>Kategori: {$kategoriBeratBadan}</p>"; ?></div>
            </div>
        </div>
        
</body>
</html>

