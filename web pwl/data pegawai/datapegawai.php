

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pegawai</title>
  <link rel="stylesheet" href="style-datapegawai.css">
  <!-- Tombol Tambah Data -->
 

</head>
<body>
  <div class="sidebar" id="sidebar">
  <h3>PT. BERKAH MULYA <br> ABADI WONOSOBO</h3>
  <nav>
    <a href="#" class="active">Dashboard</a>
    <a href="../data pegawai/data_pegawai.php">Data Pegawai</a>
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

  <div class="content">
    <div class="header">
      <div>Data pegawai</div>
      <div class="profile">
        <img src="https://via.placeholder.com/35" alt="foto">
        <div>
          <strong>Rizky Tri Wahyudi</strong><br>
          <small>Super Admin</small>
        </div>
      </div>
    </div>

    <div class="main-content">
      <h2>Data Pegawai</h2>
      <a href="tambah_pegawai.php"><button class="btn">Tambah Data</button></a>
      <div class="search-bar">
        <input type="text" placeholder="Search...">
      </div>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Jabatan</th>
              <th>No HP</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
  <tr>
    <td>1</td>
    <td>Oktavia Mega</td>
    <td>Perempuan</td>
    <td>Wonosobo</td>
    <td>14 Juni 2023</td>
    <td>Manager</td>
    <td>081111111111</td>
    <td>Wonosobo, Rt 1 Rw 03</td>
    <td class="actions">
      <a href="edit.php?id=1"><button class="edit">Edit</button></a>
      <a href="hapus.php?id=1" onclick="return confirm('Yakin ingin menghapus data ini?')">
        <button class="hapus">Hapus</button>
      </a>
    </td>
  </tr>
</tbody>

        </table>
      </div>
    </div>
  </div>
  <div class="footer">
    @PT BERKAH MULYA ABADI WONOSOBO
  </div>
</body>
</html>











