<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reviews – Skyticket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="nav.css" />
  <link rel="stylesheet" href="footer.css" />
  <link rel="stylesheet" href="review.css" />
  <script src="review.js" defer></script>
</head>
<body class="page-wrapper">

  <?php include "nav.php"; ?>

  <main class="review-page">
    <div class="review-page_inner">
      <header class="review-header">
        <h1 class="review-title">Customer reviews</h1>
        <p class="review-subtitle">How satisfied were you with your website experience &amp; journey?</p>
      </header>

      <section class="review-rate">
        <p class="review-rate_label">Rate your experience</p>
        <div class="star-rating" aria-label="Star rating">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </div>
      </section>

      <section class="review-list">
        <h2 class="review-section_title">What others are saying</h2>
        <div class="review-boxes">
          <article class="review-box">
            <cite class="review-box_author">Jhon_M</cite>
            <p class="review-box_text">"I found the payment process to be confusing. After entering my card details, it kept redirecting me back to the payment page without explaining why. I had to try several times before it finally worked. It would be helpful if there were clearer instructions or troubleshooting tips."</p>
          </article>
          <article class="review-box">
            <cite class="review-box_author">Kendric_6</cite>
            <p class="review-box_text">"While the site was generally easy to navigate, I noticed that some pages, especially during flight selection, were slow to load. This added a bit of frustration to an otherwise good experience."</p>
          </article>
          <article class="review-box">
            <cite class="review-box_author">Drake_see</cite>
            <p class="review-box_text">"I wish there was more detailed information available about the baggage policies and in-flight amenities for each airline before booking. I had to visit the airline's website to confirm, which added extra steps."</p>
          </article>
          <article class="review-box">
            <cite class="review-box_author">eminem_40</cite>
            <p class="review-box_text">"I noticed a lot of pop-ups and promotions during the booking process, which was distracting. It would be better if there were fewer interruptions to keep the experience smooth and focused on booking the flight."</p>
          </article>
        </div>
      </section>

      <section class="review-write">
        <h2 class="review-section_title">We value your opinion</h2>
        <p class="review-write_lead">Share your experience with us!</p>
        <div class="review-actions">
          <textarea class="addrev" name="review" id="review-text" placeholder="Tell us about your experience..." rows="4"></textarea>
        </div>
        <div class="submit-section">
          <button type="button" class="submit-btn">Submit review</button>
        </div>
      </section>
    </div>
  </main>

  <?php include "footer.php"; ?>

</body>
</html>
