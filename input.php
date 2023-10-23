<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Voucher</title>
</head>
<body>
    <h1>Pemesanan Voucher</h1>

    <form method="post" action="data.php">
        <label for="email">Email:</label>
        <input type="text" name="email" required><br><br>

        <label for="voucher">Pilih Voucher:</label>
        <select name="voucher">
            <option value="Ayam + Burger">Ayam + Burger</option>
            <option value="2 Ayam + McFlurry">2 Ayam + McFlurry</option>
            <option value="2 Ayam + Fruit Tea">2 Ayam + Fruit Tea</option>
        </select><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required><br><br>

        <input type="submit" name="hitung" value="Hitung Total">
    </form>
</body>
</html>
