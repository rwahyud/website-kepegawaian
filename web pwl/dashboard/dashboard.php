<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login/login.php");
    exit;
}

// Panggil koneksi
include_once('../koneksi/koneksi.php');

// Simpan nama user dari session
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Pengguna';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style-dashboard.css">
</head>
<body>
 <!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <h3>PT. BERKAH MULYA <br> ABADI WONOSOBO</h3>
  <nav>
    <a href="#" class="active">Dashboard</a>
    <a href="#">Data Pegawai</a>
    <a href="#">Masa Kerja</a>
    <a href="#">Masa Tenggang Kerja</a>
    <a href="#">Penempatan Kerja</a>
    <a href="#">Absensi</a>
  </nav>
  <div class="bottom-menu">
    <button class="minimize-btn" onclick="toggleSidebar()">≡</button>
    <a href="../login/login.php">⎋ Keluar</a>
    <a href="../logout.php">⎋ Keluar</a>

  </div>
</div>

  <div class="main">
    <div class="topbar">
      <div>Dashboard</div>
      <div>
        <strong><?= htmlspecialchars($user_name); ?></strong><br>
        <small>Super Admin</small>
      </div>
    </div>
    <div class="content">
      <h2>Selamat datang, <?= htmlspecialchars($user_name); ?></h2>
      <p>Berikut ringkasan data kepegawaian hari ini</p>
      <div class="cards">
  <div class="card total">
    <p>Total pegawai</p>
    <h3>40</h3>
  </div>
  <div class="card hadir">
    <p>Hadir hari ini</p>
    <h3>30</h3>
  </div>
  <div class="card izin">
    <p>Izin sakit</p>
    <h3>5</h3>
  </div>
  <div class="card alpha">
    <p>Alpha</p>
    <h3>5</h3>
  </div>
</div>

<h3>Riwayat absen hari ini</h3>
<table class="absen-table">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jam masuk</th>
      <th>Jam keluar</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Andi Prasetyo</td>
      <td>07:00</td>
      <td>16:00</td>
      <td><span class="badge hadir">Hadir</span></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Rina Handayani</td>
      <td>-</td>
      <td>-</td>
      <td><span class="badge sakit">Izin Sakit</span></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Budi Santoso</td>
      <td>07:15</td>
      <td>16:05</td>
      <td><span class="badge hadir">Hadir</span></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Linda Puspitasari</td>
      <td>-</td>
      <td>-</td>
      <td><span class="badge alpha">Alpha</span></td>
    </tr>
  </tbody>
</table>

    </div>
  </div>
  <script>
function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  sidebar.classList.toggle("collapsed");
}
</script>

</body>
</html>
