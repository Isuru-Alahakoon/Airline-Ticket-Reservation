<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Help &amp; Support – Skyticket</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="helpandsupport.css">
</head>
<body class="page-wrapper">

  <?php include "nav.php"; ?>

  <main class="support-page">
    <div class="support-page_inner">
      <header class="support-header">
        <h1 class="support-title">Help &amp; Support</h1>
        <p class="support-subtitle">We’re here to help with any questions about booking, changes, or your trip.</p>
      </header>

      <section class="support-section support-faq" id="faq">
        <h2 class="support-section_title">Frequently asked questions</h2>

        <div class="faq-list">
          <div class="faq-item">
            <h3 class="faq-question" onclick="toggleFAQ('faq1')">
              How do I book a flight?
              <span class="faq-toggle" aria-hidden="true">+</span>
            </h3>
            <p id="faq1" class="faq-answer">Booking a flight is simple. Enter your travel details on the homepage, select a flight, and complete your booking by providing passenger details and payment.</p>
          </div>

          <div class="faq-item">
            <h3 class="faq-question" onclick="toggleFAQ('faq2')">
              Can I change or cancel my booking?
              <span class="faq-toggle" aria-hidden="true">+</span>
            </h3>
            <p id="faq2" class="faq-answer">Yes, you can manage your bookings by entering your reference number in the Manage Booking section. Please note that changes may incur additional fees depending on your fare.</p>
          </div>

          <div class="faq-item">
            <h3 class="faq-question" onclick="toggleFAQ('faq3')">
              How do I check my flight status?
              <span class="faq-toggle" aria-hidden="true">+</span>
            </h3>
            <p id="faq3" class="faq-answer">You can check your flight status by going to the Flight Status section and entering your flight number or route details.</p>
          </div>

          <div class="faq-item">
            <h3 class="faq-question" onclick="toggleFAQ('faq4')">
              What payment methods are accepted?
              <span class="faq-toggle" aria-hidden="true">+</span>
            </h3>
            <p id="faq4" class="faq-answer">We accept credit cards, debit cards, and PayPal. For more details, please visit our Payment Options page.</p>
          </div>

          <div class="faq-item">
            <h3 class="faq-question" onclick="toggleFAQ('faq5')">
              What if I don’t receive a booking confirmation email?
              <span class="faq-toggle" aria-hidden="true">+</span>
            </h3>
            <p id="faq5" class="faq-answer">If you don’t receive a confirmation email, check your spam folder or log into your account to view your booking details.</p>
          </div>
        </div>
      </section>

      <section class="support-section support-form">
        <h2 class="support-section_title">Ask us</h2>
        <p class="support-form_lead">Can’t find what you need? Send us a message and we’ll get back to you.</p>
        <div class="contact-form">
          <label for="message">Your message</label>
          <textarea id="message" name="message" placeholder="How can we help? Type here..." rows="4"></textarea>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="your@email.com" required>
          <label for="contact">Phone number</label>
          <input type="tel" id="contact" name="contact" placeholder="+94 00 000 0000" required>
          <button type="button" class="support-submit" onclick="submitForm()">Send message</button>
        </div>
      </section>

      <section class="support-section support-contact" id="contact">
        <h2 class="support-section_title">Contact us</h2>
        <p class="support-contact_lead">If your question isn’t covered in the FAQs, reach out:</p>
        <ul class="support-contact_list">
          <li><strong>Live chat:</strong> Click the chat icon at the bottom of the page.</li>
          <li><strong>Email:</strong> support@skyticket.com</li>
          <li><strong>Phone:</strong> +94 11 123 4567</li>
        </ul>
      </section>
    </div>
  </main>

  <?php include "footer.php"; ?>

  <script>
    function toggleFAQ(faqId) {
      var el = document.getElementById(faqId);
      if (el.style.display === "none" || el.style.display === "") {
        el.style.display = "block";
      } else {
        el.style.display = "none";
      }
    }
    function submitForm() {
      var message = document.getElementById('message').value.trim();
      var email = document.getElementById('email').value.trim();
      var contact = document.getElementById('contact').value.trim();
      if (message && email && contact) {
        alert("Message sent successfully! We'll get back to you soon.");
        document.getElementById('message').value = '';
        document.getElementById('email').value = '';
        document.getElementById('contact').value = '';
      } else {
        alert("Please fill in all fields.");
      }
    }
  </script>
</body>
</html>
