<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
</head>
<body>
    <h1>Data Pesanan</h1>

    <?php
    if (isset($_POST['hitung'])) {
        $email = $_POST['email'];
        $voucher = $_POST['voucher'];
        $jumlah = $_POST['jumlah'];

        // Simpan data ke database atau file di sini
        // Misalnya, simpan ke file CSV atau database MySQL

        echo "<h2>Pesanan Anda:</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Voucher: $voucher</p>";
        echo "<p>Jumlah: $jumlah</p>";

        // Lanjutkan dengan perhitungan harga dan tampilkan kepada pengguna
    }
    ?>
</body>
</html>
