<?php

session_start();
$_SESSION['user_id'] = $user['id']; // sesuaikan
$_SESSION['user_name'] = $user['nama']; // pastikan ini diset



include '../koneksi/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($query) == 1) {
        $user = mysqli_fetch_assoc($query);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            header("Location: ../dashboard/dashboard.php");

            exit;
        }
    }

    echo "<script>alert('Email atau password salah'); window.location='login.php';</script>";
}
?>
