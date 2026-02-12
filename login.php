<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in – Skyticket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="login.css">
</head>
<body class="page-wrapper">

  <?php include "nav.php"; ?>

  <main class="login-page">
    <div class="login-page_inner">
      <div class="login-card">
        <header class="login-header">
          <p class="login-hint">Please enter your details</p>
          <h1 class="login-title">Welcome back</h1>
        </header>

        <form class="login-form" action="loginprocess.php" method="post">
          <div class="login-field">
            <input type="text" id="user_name" name="user_name" placeholder="Email address" required autocomplete="username" class="login-input">
          </div>
          <div class="login-field">
            <input type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password" class="login-input">
          </div>

          <div class="login-row">
            <label class="login-remember">
              <input type="checkbox" name="remember" value="1" class="login-checkbox">
              <span>Remember for 30 days</span>
            </label>
            <a href="#" class="login-forgot">Forgot password</a>
          </div>

          <button type="submit" class="login-btn login-btn_primary" name="userlog">Log in</button>

          <button type="button" class="login-btn login-btn_google" onclick="window.location.href='#'" aria-label="Sign in with Google">
            <span class="login-google_icon">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.64 9.2c0-.637-.057-1.251-.164-1.84H9v3.481h4.844c-.209 1.125-.843 2.078-1.796 2.717v2.258h2.908c1.702-1.567 2.684-3.874 2.684-6.615z" fill="#4285F4"/><path d="M9 18c2.43 0 4.467-.806 5.956-2.184l-2.908-2.258c-.806.54-1.837.86-3.048.86-2.344 0-4.328-1.584-5.036-3.711H.957v2.332C2.438 15.983 5.482 18 9 18z" fill="#34A853"/><path d="M3.964 10.707c-.18-.54-.282-1.117-.282-1.707s.102-1.167.282-1.707V4.961H.957C.347 6.175 0 7.55 0 9s.348 2.825.957 4.039l3.007-2.332z" fill="#FBBC05"/><path d="M9 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.463.891 11.426 0 9 0 5.482 0 2.438 2.017.957 4.961L3.964 7.293C4.672 5.163 6.656 3.58 9 3.58z" fill="#EA4335"/></svg>
            </span>
            Sign in with Google
          </button>

          <p class="login-admin-wrap">
            <button type="submit" class="login-admin_link" name="adminlog">Admin? Log in here</button>
          </p>
        </form>

        <p class="login-signup">
          Don't have an account? <a href="signup2.php" class="login-signup_link">Sign up</a>
        </p>
      </div>
    </div>
  </main>

  <?php include "footer.php"; ?>

  <script src="login.js"></script>
</body>
</html>
