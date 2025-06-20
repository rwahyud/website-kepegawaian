<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register - Yayasan Karate</title>
  <link rel="stylesheet" href="style-login.css">
</head>
<body>
  <div class="login-page">
    <div class="left-panel">
      <div class="form-box">
        <h3>Daftar Sekarang</h3>
        <p>Buat akun Anda</p>
        <form action="register_process.php" method="POST">
          <input type="text" name="nama" placeholder="Nama Lengkap" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password" required>
          <button type="submit">DAFTAR</button>
        </form>
        <p class="signup">Sudah punya akun? <a href="login.php">Login di sini</a></p>
      </div>
    </div>
    <div class="right-panel">
      <img src="logo-karate.png" alt="Logo">
    </div>
  </div>
</body>
</html>
