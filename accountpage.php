<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account – Skyticket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="accountpage.css">
</head>
<body class="page-wrapper">

  <?php include "nav.php"; ?>

  <main class="account-page">
    <div class="account-page_inner">
      <header class="account-header">
        <h1 class="account-title">My Account</h1>
        <p class="account-subtitle">Manage your profile, details, and bookings.</p>
      </header>

      <div class="account-profile-card">
        <div class="account-profile">
          <img src="images/download.png" alt="Profile" class="account-avatar profile-picture">
          <div class="account-profile_info">
            <p class="account-membership">Membership ID: <strong>123456789</strong></p>
            <div class="account-profile_actions">
              <button type="button" class="account-btn account-btn_secondary">Change profile picture</button>
              <button type="button" class="account-btn account-btn_primary edit-btn">Edit details</button>
            </div>
          </div>
        </div>
      </div>

      <section class="account-section">
        <h2 class="account-section_title">Account details</h2>
        <div class="account-card">
          <div class="account-grid">
            <div class="account-field">
              <label for="name">Full name</label>
              <input type="text" id="name" class="account-input" value="John Doe">
            </div>
            <div class="account-field">
              <label for="nic">NIC</label>
              <input type="text" id="nic" class="account-input" value="123456789V">
            </div>
            <div class="account-field">
              <label for="email">Email</label>
              <input type="email" id="email" class="account-input" value="johndoe@example.com">
            </div>
            <div class="account-field">
              <label for="country">Country</label>
              <input type="text" id="country" class="account-input" value="United States">
            </div>
            <div class="account-field">
              <label for="passport">Passport number</label>
              <input type="text" id="passport" class="account-input" value="M1234567">
            </div>
            <div class="account-field">
              <label for="phone">Contact number</label>
              <input type="text" id="phone" class="account-input" value="+123456789">
            </div>
          </div>
        </div>
      </section>

      <section class="account-section">
        <h2 class="account-section_title">Change password</h2>
        <div class="account-card">
          <div class="account-password">
            <div class="account-field">
              <label for="old-password">Current password</label>
              <input type="password" id="old-password" class="account-input" placeholder="Enter current password">
            </div>
            <div class="account-field">
              <label for="new-password">New password</label>
              <input type="password" id="new-password" class="account-input" placeholder="Enter new password">
            </div>
            <div class="account-field">
              <label for="confirm-password">Confirm new password</label>
              <input type="password" id="confirm-password" class="account-input" placeholder="Confirm new password">
            </div>
            <button type="button" class="account-btn account-btn_primary">Update password</button>
          </div>
        </div>
      </section>

      <section class="account-section">
        <h2 class="account-section_title">Bookings</h2>
        <div class="account-card">
          <div class="account-bookings">
            <a href="#" class="account-btn account-btn_primary">Current bookings</a>
            <a href="#" class="account-btn account-btn_secondary">Booking history</a>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php include "footer.php"; ?>

  <script src="accountpage.js"></script>
</body>
</html>
