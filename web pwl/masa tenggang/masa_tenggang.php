<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Masa Tenggang Kerja</title>
  <link rel="stylesheet" href="style-masatenggang.css" />
</head>
<body>
  <div class="sidebar">
    <h3>PT. BERKAH MULYA<br>ABADI WONOSOBO</h3>
    <nav>
    <a href="../dashboard/dashboard.php">Dashboard</a>
    <a href="../data pegawai/data_pegawai.php">Data Pegawai</a>
    <a href="../masa kerja/masa_kerja.php">masa kerja </a>
    <a href="#" class="active">Masa Tenggang Kerja</a>
    <a href="../penempatan kerja/penempatan_kerja.php">Penempatan Kerja</a>
    <a href="../absensi/absensi.php">Absensi</a>
    </nav>
    <div class="bottom-menu">
      <a href="?page=logout">⏻ Keluar</a>
    </div>
  </div>

  <div class="content">
    <div class="header">
      <h2>Informasi Masa Tenggang Kerja</h2>
      <div class="profile">
        <img src="user.png" alt="Foto Profil" />
        <div>
          <strong>Tri Wahyudi</strong><br />
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
              <th>Level</th>
              <th>Jabatan</th>
              <th>No HP</th>
              <th>Masa Tenggang</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr class="danger">
              <td>1</td>
              <td>Clarina Maya</td>
              <td>Perempuan</td>
              <td>Produksi</td>
              <td>Mandor</td>
              <td>Mandor Shift</td>
              <td>08777777777</td>
              <td>1 Agustus 2025</td>
              <td><button class="btn-aksi">Aksi</button></td>
            </tr>
            <!-- Tambahkan baris lainnya -->
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
