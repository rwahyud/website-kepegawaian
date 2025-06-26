<?php
$conn = new mysqli("localhost", "root", "", "db_kepegawaian");

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $alamat = $_POST['alamat'];
  $tanggal_masuk = $_POST['tanggal_masuk'];

  $sql = "INSERT INTO pegawai (nip, nama, jabatan, alamat, tanggal_masuk) 
          VALUES ('$nip', '$nama', '$jabatan', '$alamat', '$tanggal_masuk')";

  if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman data pegawai
    header("Location: ../dara_pegawai.php?page=pegawai&pesan=sukses");
    exit;
  } else {
    echo "<script>alert('Gagal menyimpan data: " . $conn->error . "');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Pegawai</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
      padding: 20px;
    }
    h2 {
      margin-bottom: 20px;
    }
    form {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      max-width: 500px;
    }
    label {
      display: block;
      margin-top: 10px;
    }
    input, textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    button {
      margin-top: 15px;
      background-color: #0a2e63;
      color: white;
      border: none;
      padding: 10px 16px;
      border-radius: 6px;
      cursor: pointer;
    }
    a {
      display: inline-block;
      margin-top: 10px;
      text-decoration: none;
      color: #0a2e63;
    }
  </style>
</head>
<body>

  <h2>Tambah Data Pegawai</h2>

  <form method="POST">
    <label>NIP</label>
    <input type="number" name="nip" required>

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Jabatan</label>
    <input type="text" name="jabatan" required>

    <label>Alamat</label>
    <textarea name="alamat" rows="3" required></textarea>

    <label>Tanggal Masuk</label>
    <input type="date" name="tanggal_masuk" required>

    <button type="submit">Simpan</button>
  </form>

  <a href="../data_pegawai.php?page=pegawai">← Kembali ke Data Pegawai</a>
<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login/login.php");
    exit;
}

include_once "koneksi/koneksi.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {
    case 'dashboard':
        include "dashboard/dashboard.php";
        break;
    case 'pegawai':
        include "data pegawai/data_pegawai.php";
        break;
    case 'tambah_pegawai':
        include "data pegawai/tambah_pegawai.php";
        break;
    // Tambah case lain sesuai kebutuhan
    default:
        echo "<h2>Halaman tidak ditemukan!</h2>";
}
?>





</body>
</html>
