<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard – Skyticket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="admindashboard.css">
</head>
<body class="admin-body">

  <aside class="admin-sidebar">
    <div class="admin-sidebar_header">
      <a href="dashboard.php" class="admin-brand">Skyticket</a>
      <span class="admin-brand_tag">Admin</span>
    </div>
    <nav class="admin-nav">
      <a href="#" class="admin-nav_link active" data-section="dashboard">
        <span class="admin-nav_icon">◇</span>
        Dashboard
      </a>
      <a href="flightmanage.php" class="admin-nav_link">
        <span class="admin-nav_icon">◇</span>
        Manage flights
      </a>
      <a href="ticketmanage.php" class="admin-nav_link">
        <span class="admin-nav_icon">◇</span>
        Bookings
      </a>
      <a href="airlinemanage.php" class="admin-nav_link">
        <span class="admin-nav_icon">◇</span>
        Airlines
      </a>
      <a href="passengermanage.php" class="admin-nav_link">
        <span class="admin-nav_icon">◇</span>
        Passengers
      </a>
      <a href="userinsert.php" class="admin-nav_link">
        <span class="admin-nav_icon">◇</span>
        Users
      </a>
      <a href="#" class="admin-nav_link" data-section="settings">
        <span class="admin-nav_icon">◇</span>
        Settings
      </a>
    </nav>
    <div class="admin-sidebar_footer">
      <a href="indexx.php" class="admin-nav_link admin-nav_logout">Log out</a>
    </div>
  </aside>

  <main class="admin-main">
    <header class="admin-header">
      <h1 class="admin-header_title">Dashboard</h1>
      <div class="admin-header_user">
        <span class="admin-header_name">Admin</span>
        <img src="images/profile.png" alt="" class="admin-header_avatar">
      </div>
    </header>

    <div class="admin-content">
      <!-- Dashboard -->
      <section id="dashboard" class="admin-section admin-section_visible">
        <div class="admin-stats">
          <div class="admin-stat_card">
            <p class="admin-stat_label">Total flights</p>
            <p class="admin-stat_value">120</p>
          </div>
          <div class="admin-stat_card">
            <p class="admin-stat_label">Total bookings</p>
            <p class="admin-stat_value">450</p>
          </div>
          <div class="admin-stat_card">
            <p class="admin-stat_label">Total users</p>
            <p class="admin-stat_value">320</p>
          </div>
          <div class="admin-stat_card">
            <p class="admin-stat_label">Revenue</p>
            <p class="admin-stat_value">$50,000</p>
          </div>
        </div>
        <div class="admin-quick_links">
          <h2 class="admin-quick_title">Quick actions</h2>
          <div class="admin-quick_grid">
            <a href="flightmanage.php" class="admin-quick_card">Manage flights</a>
            <a href="ticketmanage.php" class="admin-quick_card">View bookings</a>
            <a href="airlinemanage.php" class="admin-quick_card">Airlines</a>
            <a href="userinsert.php" class="admin-quick_card">Users</a>
          </div>
        </div>
      </section>

      <!-- Settings (inline section) -->
      <section id="settings" class="admin-section">
        <h2 class="admin-section_title">Settings</h2>
        <p class="admin-section_desc">Adjust your system settings and preferences here.</p>
      </section>
    </div>
  </main>

  <script>
    (function() {
      var sections = document.querySelectorAll('.admin-section');
      var links = document.querySelectorAll('.admin-nav_link[data-section]');

      function showSection(id) {
        sections.forEach(function(s) {
          s.classList.toggle('admin-section_visible', s.id === id);
        });
        links.forEach(function(a) {
          a.classList.toggle('active', a.getAttribute('data-section') === id);
        });
        var title = document.querySelector('.admin-header_title');
        if (title) {
          var labels = { dashboard: 'Dashboard', settings: 'Settings' };
          title.textContent = labels[id] || 'Admin';
        }
      }

      links.forEach(function(a) {
        a.addEventListener('click', function(e) {
          var id = a.getAttribute('data-section');
          if (id) {
            e.preventDefault();
            showSection(id);
          }
        });
      });

      showSection('dashboard');
    })();
  </script>
</body>
</html>
