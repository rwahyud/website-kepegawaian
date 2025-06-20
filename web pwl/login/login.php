<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Yayasan Karate</title>
  <link rel="stylesheet" href="style-login.css">
</head>
<body>
  <div class="login-page">
    <div class="left-panel">
      <div class="form-box">
        <h3>Welcome Back</h3>
        <p>Login ke akun Anda</p>
        <form action="login_process.php" method="POST">
          <input type="email" name="email" placeholder="Email" required>
          <input type="password" name="password" placeholder="Password" required>
          <div class="forgot"><a href="#">Lupa Password?</a></div>
          <button type="submit">LOGIN</button>
        </form>
        <p class="signup">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
      </div>
    </div>
    <div class="right-panel">
      <img src="logo-karate.png" alt="Logo">
    </div>
  </div>
</body>
</html>
