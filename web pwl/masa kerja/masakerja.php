<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Masa Kerja Pegawai</title>
  <link rel="stylesheet" href="style-masakerja.css" />
</head>
<body>
  <div class="sidebar">
    <h3>PT. BERKAH MULYA<br>ABADI WONOSOBO</h3>
  <nav>
    <a href="../dashboard/dashboard.php">Dashboard</a>
    <a href="../data pegawai/data_pegawai.php">Data Pegawai</a>
    <a href="#" class="active">masa kerja </a>
    <a href="../masa tenggang/masa_tenggang.php">Masa Tenggang Kerja</a>
    <a href="../penempatan kerja/penempatan_kerja.php">Penempatan Kerja</a>
    <a href="../absensi/absensi.php">Absensi</a>
  </nav>
    <div class="bottom-menu">
      <a href="?page=logout">⏻ Keluar</a>
    </div>
  </div>

  <div class="content">
    <div class="header">
      <h2>Informasi Masa Kerja Pegawai</h2>
      <div class="profile">
        <img src="user.png" alt="Foto Profil" />
        <div>
          <strong>Hiday Tri Wahyudi</strong><br />
          <small>Super Admin</small>
        </div>
      </div>
    </div>

    <div class="main-content">
      <div class="search-bar">
        <input type="text" placeholder="Cari..." />
        <button class="btn">Cari</button>
      </div>

      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Divisi</th>
              <th>Jabatan</th>
              <th>Mulai Kontrak</th>
              <th>Masa Kerja</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Tri Wahyudi</td>
              <td>Laki-laki</td>
              <td>IT</td>
              <td>Programmer</td>
              <td>01-01-2023</td>
              <td>1 Tahun</td>
              <td>Aktif</td>
            </tr>
            <!-- Tambahkan baris lainnya di sini -->
          </tbody>
        </table>
      </div>
    </div>

    <div class="footer">
      © 2025 PT. BERKAH MULYA ABADI WONOSOBO
    </div>
  </div>
</body>
</html>
