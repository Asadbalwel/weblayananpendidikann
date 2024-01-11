<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Form Pembayaran SPP</title>
</head>
<body>
    <div class="container">
        <h2>Pembayaran SPP</h2>
        <form action="process.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="nik">NIK:</label>
            <input type="text" name="nik" required>

            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" required>

            <label for="bulan">Bulan:</label>
            <input type="text" name="bulan" required>

            <label for="jumlah">Jumlah Pembayaran:</label>
            <input type="text" name="jumlah" required>

            <button type="submit">Bayar</button>
        </form>
    </div>
</body>
</html>
