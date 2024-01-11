<?php

// Membuat koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username_db = "root"; // Ganti dengan username database Anda
$password_db = ""; // Ganti dengan password database Anda
$database = "sdit_nurul_hikmah"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username_db, $password_db, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form login
$username = $_POST['name'];
$password = $_POST['password'];

// Melakukan query ke database untuk mencari user dengan username dan password yang sesuai
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

// Memeriksa apakah hasil query menghasilkan baris data atau tidak
if ($result->num_rows > 0) {
    
    header('Location: dashboard.php');
    echo "Login berhasil.";
} else {
    // Login gagal
    echo "Login gagal. Periksa kembali username dan password Anda.";
}

// Menutup koneksi database
$conn->close();

?>
