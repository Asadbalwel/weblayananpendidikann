<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nik = $_POST["nik"];
    $kelas = $_POST["kelas"];
    $bulan = $_POST["bulan"];
    $jumlah = $_POST["jumlah"];
    $riwayat = $_POST["riwayat"];

    // Lakukan sesuatu dengan data yang diterima, misalnya menyimpan ke database
    // Di sini Anda dapat menambahkan koneksi ke database dan query sesuai kebutuhan.
    
    // Contoh: Simpan ke database
    // $koneksi = mysqli_connect("host", "username", "password", "nama_database");
    // $query = "INSERT INTO pembayaran_spp (nama, nik, kelas, bulan, jumlah, riwayat) VALUES ('$nama', '$nik', '$kelas', '$bulan', '$jumlah', '$riwayat')";
    // mysqli_query($koneksi, $query);

    // Setelah itu, Anda dapat mengarahkan pengguna ke halaman konfirmasi atau halaman lain.
    header("Location: dashboard.php");
    exit("location: index.php");
}
?>
