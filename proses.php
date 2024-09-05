<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $conn->real_escape_string($_POST['nama']);
$nim = $conn->real_escape_string($_POST['nim']);
$kelas = $conn->real_escape_string($_POST['kelas']);
$jeniskelamin = $conn->real_escape_string($_POST['jenis_kelamin']);
$email = $conn->real_escape_string($_POST['email']);
$pesan = $conn->real_escape_string($_POST['pesan']);

// Query SQL untuk menyimpan data ke database
$sql = "INSERT INTO kontak (nama, nim, kelas, jenis_kelamin, email, pesan) 
        VALUES ('$nama', '$nim', '$kelas', '$jeniskelamin', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dikirim";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>