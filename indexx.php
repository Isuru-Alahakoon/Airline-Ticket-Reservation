<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skyticket – Book Flights &amp; Travel with Confidence</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="indexx.css">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="footer.css">
</head>
<body class="page-wrapper">

  <?php include "nav.php"; ?>

  <main class="index-page">
    <!-- Hero -->
    <section class="hero">
      <div class="hero-overlay"></div>
      <div class="hero-content">
        <h1 class="hero-title">Where will you go next?</h1>
        <p class="hero-subtitle">Compare prices, book flights, and manage your trips in one place.</p>
      </div>
    </section>

    <!-- Search card -->
    <section class="search-section">
      <div class="search-card">
        <form id="flight-search-form" class="search-form" action="flightpage.php" method="get">
          <div class="form-row form-row-1">
            <div class="form-group">
              <label for="trip-type">Trip type</label>
              <select name="trip" id="trip-type">
                <option value="one-way">One way</option>
                <option value="round-trip">Round trip</option>
                <option value="multi-city">Multi-city</option>
              </select>
            </div>
            <div class="form-group">
              <label for="passengers">Passengers</label>
              <select name="passengers" id="passengers">
                <option value="1">1 Adult</option>
                <option value="2">2 Adults</option>
                <option value="3">3 Adults</option>
                <option value="4">4 Adults</option>
                <option value="5">5+ Adults</option>
              </select>
            </div>
            <div class="form-group">
              <label for="cabin">Cabin class</label>
              <select name="cabin" id="cabin">
                <option value="economy">Economy</option>
                <option value="premium-economy">Premium Economy</option>
                <option value="business">Business</option>
                <option value="first">First</option>
              </select>
            </div>
          </div>
          <div class="form-row form-row-2">
            <div class="form-group form-group-wide">
              <label for="departure">From</label>
              <input type="text" id="departure" name="from" placeholder="City or airport" required>
            </div>
            <div class="form-group">
              <label for="depart-date">Departure date</label>
              <input type="date" id="depart-date" name="depart_date" required>
            </div>
          </div>
          <div class="form-row form-row-3">
            <div class="form-group form-group-wide">
              <label for="arrival">To</label>
              <input type="text" id="arrival" name="to" placeholder="City or airport" required>
            </div>
            <div class="form-group">
              <label for="return-date">Return date</label>
              <input type="date" id="return-date" name="return_date" placeholder="Optional">
            </div>
          </div>
          <div class="form-row form-row-submit">
            <button type="submit" class="btn-search">
              <span class="btn-search-icon">&#9992;</span>
              Search flights
            </button>
          </div>
        </form>
      </div>
    </section>

    <!-- Deals -->
    <section class="deals-section">
      <div class="section-inner">
        <h2 class="section-title">Top deals</h2>
        <p class="section-desc">Save on popular routes and plan your next trip.</p>
        <div class="deals-grid">
          <article class="deal-card">
            <div class="deal-image" style="background-image: url('images/istockphoto-1200320810-612x612.jpg');"></div>
            <div class="deal-body">
              <span class="deal-route">Colombo → Dubai</span>
              <p class="deal-price">From <strong>Rs. 45,000</strong></p>
              <a href="flightpage.php" class="deal-link">View flights</a>
            </div>
          </article>
          <article class="deal-card">
            <div class="deal-image" style="background-image: url('images/istockphoto-1258141375-612x612.jpg');"></div>
            <div class="deal-body">
              <span class="deal-route">Colombo → Singapore</span>
              <p class="deal-price">From <strong>Rs. 32,500</strong></p>
              <a href="flightpage.php" class="deal-link">View flights</a>
            </div>
          </article>
          <article class="deal-card">
            <div class="deal-image" style="background-image: url('images/airline2.jpg');"></div>
            <div class="deal-body">
              <span class="deal-route">Colombo → Mumbai</span>
              <p class="deal-price">From <strong>Rs. 28,900</strong></p>
              <a href="flightpage.php" class="deal-link">View flights</a>
            </div>
          </article>
          <article class="deal-card">
            <div class="deal-image" style="background-image: url('images/istockphoto-1258141375-612x612.jpg');"></div>
            <div class="deal-body">
              <span class="deal-route">Colombo → Bangkok</span>
              <p class="deal-price">From <strong>Rs. 38,200</strong></p>
              <a href="flightpage.php" class="deal-link">View flights</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Why us / Value props -->
    <section class="value-section">
      <div class="section-inner">
        <h2 class="section-title">Why book with Skyticket</h2>
        <div class="value-grid">
          <div class="value-card">
            <div class="value-icon">&#128200;</div>
            <h3>Best price guarantee</h3>
            <p>We compare hundreds of options so you get the best fare.</p>
          </div>
          <div class="value-card">
            <div class="value-icon">&#128274;</div>
            <h3>Secure booking</h3>
            <p>Your data and payments are protected with industry-standard security.</p>
          </div>
          <div class="value-card">
            <div class="value-icon">&#128222;</div>
            <h3>24/7 support</h3>
            <p>Need help? Our team is here around the clock for your trips.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Travel news -->
    <section class="news-section">
      <div class="section-inner">
        <h2 class="section-title">Travel news &amp; tips</h2>
        <p class="section-desc">Stay updated with the latest travel information.</p>
        <div class="news-grid">
          <article class="news-card">
            <div class="news-placeholder"></div>
            <h3>New routes now available</h3>
            <p>Discover more destinations from Colombo with our expanded network.</p>
          </article>
          <article class="news-card">
            <div class="news-placeholder"></div>
            <h3>Travel requirements guide</h3>
            <p>Check visa and health requirements before you fly.</p>
          </article>
          <article class="news-card">
            <div class="news-placeholder"></div>
            <h3>Earn rewards on every trip</h3>
            <p>Join our loyalty program and get more from every booking.</p>
          </article>
          <article class="news-card">
            <div class="news-placeholder"></div>
            <h3>Flexible change policies</h3>
            <p>Change your plans with ease—terms apply to eligible fares.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

  <?php include "footer.php"; ?>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var form = document.getElementById('flight-search-form');
      var departure = document.getElementById('departure');
      var arrival = document.getElementById('arrival');

      form.addEventListener('submit', function (e) {
        if (!departure.value.trim() || !arrival.value.trim()) {
          e.preventDefault();
          alert('Please enter both From and To locations.');
        }
      });
    });
  </script>
</body>
</html>
