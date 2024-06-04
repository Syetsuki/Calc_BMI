<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator IMT</title>
    <link rel="stylesheet" typer="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="teks"><label>Kalkulator Indeks Massa Tubuh</label></div>
            <form action="calc.php" method="post">
                <br>
                <div class="submitarea">
                        <div class="tinggi">
                            <input type="text" id="tinggi" name="nama" required>
                            <label for="tinggi_badan" class="Labelline">Nama Lengkap</label>
                        </div>
                </div>
                <div class="tanggal">
                    <label for="tanggal_lahir" class="tanggalLahir">Tanggal Lahir</label><br>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <button type="submit" action="calc.php">Hitung</button>
                <div class="container1">
                    <div class="radio">
                        <div class="input-radio" id="lk">
                            <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" required>
                            <div class="radio-title">
                                <img src="asset/man.png">
                                <label for="laki-laki">Laki - Laki</label>
                            </div>
                        </div>
                        <div class="input-radio" id="pr">
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" required>
                            <div class="radio-title">
                                <img src="asset/woman.png">
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="submitarea">
                        <div class="tinggi">
                            <input type="number" id="tinggi_badan" name="tinggi_badan" required>
                            <label for="tinggi_badan" class="Labelline">Tinggi Badan(cm)</label>
                        </div>
                        <br>
                        <div class="berat">
                            <input type="number" id="berat_badan" name="berat_badan" required>
                            <label for="berat_badan" class="Labelline">Berat Badan(kg)</label>
                        </div>     
                    </div>
                </div>
            </form>
    </div>
</body>
</html>