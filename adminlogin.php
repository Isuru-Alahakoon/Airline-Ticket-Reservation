<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login – Skyticket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="adminlogin.css">
</head>
<body class="page-wrapper">

  <?php include "nav.php"; ?>

  <main class="adminlogin-page">
    <div class="adminlogin-page_inner">
      <div class="adminlogin-card">
        <header class="adminlogin-header">
          <p class="adminlogin-hint">Admin access only</p>
          <h1 class="adminlogin-title">Admin login</h1>
        </header>

        <form class="adminlogin-form" action="loginprocess.php" method="post">
          <div class="adminlogin-field">
            <label for="user_name">Admin email</label>
            <input type="email" id="user_name" name="user_name" placeholder="Enter your admin email" required autocomplete="username" class="adminlogin-input">
          </div>
          <div class="adminlogin-field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required autocomplete="current-password" class="adminlogin-input">
          </div>

          <div class="adminlogin-row">
            <a href="#" class="adminlogin-forgot">Forgot password?</a>
          </div>

          <button type="submit" class="adminlogin-btn adminlogin-btn_primary" name="adminlog">Log in to dashboard</button>
        </form>

        <p class="adminlogin-back">
          Not an admin? <a href="login.php" class="adminlogin-back_link">Log in as user</a>
        </p>
      </div>
    </div>
  </main>

  <?php include "footer.php"; ?>

</body>
</html>
