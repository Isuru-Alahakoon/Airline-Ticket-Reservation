<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment successful – Skyticket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="PaymentDone.css">
</head>
<body class="page-wrapper">

  <?php include "nav.php"; ?>

  <main class="paymentdone-page">
    <div class="paymentdone-page_inner">
      <div class="paymentdone-card">
        <div class="paymentdone-icon" aria-hidden="true">✓</div>
        <h1 class="paymentdone-title">Payment successful</h1>
        <p class="paymentdone-msg">Thank you for your payment. Your booking has been confirmed and you will receive a confirmation email shortly.</p>
        <form action="indexx.php" method="get" class="paymentdone-form">
          <button type="submit" class="paymentdone-btn" onclick="msg()">Back to home</button>
        </form>
      </div>
    </div>
  </main>

  <?php include "footer.php"; ?>

  <script src="PaymentDone.js"></script>
</body>
</html>
