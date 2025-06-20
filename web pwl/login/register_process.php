<?php
include '../koneksi/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi_password'];

    if ($password !== $konfirmasi) {
        echo "<script>alert('Password dan konfirmasi tidak sama'); window.location='register.php';</script>";
        exit;
    }

    // Cek apakah email sudah digunakan
    $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Email sudah terdaftar'); window.location='register.php';</script>";
        exit;
    }

    // Simpan user
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = mysqli_query($koneksi, "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$hash')");

    if ($query) {
        echo "<script>alert('Registrasi berhasil, silakan login'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal'); window.location='register.php';</script>";
    }
}
?>
