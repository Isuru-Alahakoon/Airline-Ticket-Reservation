<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up – Skyticket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="signup2.css">
</head>
<body class="page-wrapper">

  <?php include "nav.php"; ?>

  <main class="signup-page">
    <div class="signup-page_inner">
      <div class="signup-card">
        <header class="signup-header">
          <p class="signup-hint">Please enter your details</p>
          <h1 class="signup-title">Create your account</h1>
        </header>

        <form id="signupForm" class="signup-form" action="signupprocess.php" method="post">
          <div class="signup-section">
            <h2 class="signup-section_title">Personal details</h2>
            <div class="signup-row">
              <div class="signup-field">
                <label for="title">Title</label>
                <select name="title" id="title" class="signup-input">
                  <option value="Mr">Mr</option>
                  <option value="Mrs">Mrs</option>
                  <option value="Miss">Miss</option>
                </select>
              </div>
              <div class="signup-field">
                <label for="fname">First name</label>
                <input type="text" id="fname" name="fname" placeholder="First name" required class="signup-input">
              </div>
              <div class="signup-field">
                <label for="lname">Last name</label>
                <input type="text" id="lname" name="lname" placeholder="Last name" required class="signup-input">
              </div>
            </div>
            <div class="signup-field">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" placeholder="Choose a username" required class="signup-input">
            </div>
            <div class="signup-field">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Email address" required class="signup-input">
            </div>
          </div>

          <div class="signup-section">
            <h2 class="signup-section_title">Password</h2>
            <div class="signup-field">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Create a password" required class="signup-input">
            </div>
            <div class="signup-field">
              <label for="confirmpassword">Confirm password</label>
              <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password" required class="signup-input">
            </div>
          </div>

          <div class="signup-section">
            <h2 class="signup-section_title">Travel &amp; contact</h2>
            <div class="signup-field">
              <label for="passport">Passport number</label>
              <input type="text" id="passport" name="passport" placeholder="Passport number" class="signup-input">
            </div>
            <div class="signup-row">
              <div class="signup-field">
                <label for="date">Date of birth</label>
                <input type="date" id="date" name="date" class="signup-input">
              </div>
              <div class="signup-field">
                <label for="country">Country</label>
                <select name="country" id="country" class="signup-input">
                  <option value="sri lanka">Sri Lanka</option>
                  <option value="Japan">Japan</option>
                  <option value="south Korea">South Korea</option>
                  <option value="China">China</option>
                  <option value="India">India</option>
                  <option value="Australia">Australia</option>
                </select>
              </div>
            </div>
            <div class="signup-field">
              <label for="address">Address</label>
              <input type="text" id="address" name="address" placeholder="Address" class="signup-input">
            </div>
            <div class="signup-row">
              <div class="signup-field">
                <label for="country_code">Country code</label>
                <input type="text" id="country_code" name="country_code" placeholder="e.g. +94" class="signup-input">
              </div>
              <div class="signup-field">
                <label for="mobile">Mobile number</label>
                <input type="text" id="mobile" name="mobile" placeholder="Mobile number" class="signup-input">
              </div>
            </div>
          </div>

          <button type="submit" class="signup-btn" name="reg">Sign up</button>
        </form>

        <p class="signup-login">
          Already have an account? <a href="login.php" class="signup-login_link">Log in</a>
        </p>
      </div>
    </div>
  </main>

  <?php include "footer.php"; ?>

  <script src="sign.js"></script>
</body>
</html>
