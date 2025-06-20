<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pegawai</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f1f1f1;
    }
    .sidebar {
      position: fixed;
      width: 180px;
      height: 100vh;
      background: #142850;
      color: #fff;
      padding-top: 20px;
    }
    .sidebar h3 {
      text-align: center;
      font-size: 14px;
      margin-bottom: 30px;
      padding: 0 10px;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar ul li {
      padding: 10px 20px;
      color: #fff;
    }
    .sidebar ul li.active,
    .sidebar ul li:hover {
      background: #1e3a63;
      color: #00bfff;
      cursor: pointer;
    }
    .sidebar ul li.active::after {
      content: "\2022";
      color: #00bfff;
      float: right;
    }
    .content {
      margin-left: 180px;
      padding: 20px;
    }
    .header {
      background: #2e3e5c;
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .header .profile {
      display: flex;
      align-items: center;
    }
    .header .profile img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      margin-right: 10px;
    }
    .main-content {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
    }
    .main-content h2 {
      margin-bottom: 10px;
    }
    .btn {
      background: #0a2e63;
      color: white;
      border: none;
      padding: 8px 14px;
      border-radius: 6px;
      cursor: pointer;
    }
    .table-container {
      margin-top: 20px;
      overflow-x: auto;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border-bottom: 1px solid #ccc;
      text-align: left;
      font-size: 14px;
    }
    th {
      background-color: #f2f2f2;
    }
    .actions button {
      margin-right: 5px;
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      color: white;
      cursor: pointer;
    }
    .actions .edit {
      background-color: #0a2e63;
    }
    .actions .hapus {
      background-color: #b23b3b;
    }
    .search-bar {
      float: right;
      margin-top: -35px;
    }
    .search-bar input[type="text"] {
      padding: 6px;
      border-radius: 20px;
      border: 1px solid #ccc;
      width: 200px;
    }
    .footer {
      background: #142850;
      color: white;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      left: 180px;
      width: calc(100% - 180px);
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h3>PT. BERKAH MULYA <br> ABADI WONOSOBO</h3>
    <ul>
      <li>Dashboard</li>
      <li class="active">Data Pegawai</li>
      <li>Masa Kerja</li>
      <li>Masa Tenggang Kerja</li>
      <li>Penempatan Kerja</li>
      <li>Absensi</li>
    </ul>
    <ul>
      <li style="margin-top: 30px;">Keluar</li>
    </ul>
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
      <button class="btn">Tambah Data</button>
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
                <button class="edit">Edit</button>
                <button class="hapus">Hapus</button>
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
