<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm your booking – Skyticket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="flightconfirmation.css">
</head>
<body class="page-wrapper">
    <?php include "nav.php"; ?>

    <main class="confirm-page">
        <div class="confirm-page_inner">
            <header class="confirm-header">
                <h1 class="confirm-title">Booking details</h1>
                <p class="confirm-subtitle">Review your flight and traveler information before payment.</p>
            </header>

            <form class="confirm-form">
                <section class="confirm-section confirm-flights">
                    <h2 class="confirm-section_title">Flights</h2>
                    <div class="confirm-grid">
                        <div class="confirm-card">
                            <h3 class="confirm-card_title">Departing flight</h3>
                            <div class="confirm-card_fields">
                                <div class="confirm-field">
                                    <label for="depart-date">Date</label>
                                    <input type="date" id="depart-date" name="depart_date" value="">
                                </div>
                                <div class="confirm-field">
                                    <label for="depart-time">Time</label>
                                    <input type="time" id="depart-time" name="depart_time" value="">
                                </div>
                            </div>
                            <a href="flightpage.php" class="confirm-link">Change flight</a>
                        </div>
                        <div class="confirm-card">
                            <h3 class="confirm-card_title">Return flight</h3>
                            <div class="confirm-card_fields">
                                <div class="confirm-field">
                                    <label for="return-date">Date</label>
                                    <input type="date" id="return-date" name="return_date" value="">
                                </div>
                                <div class="confirm-field">
                                    <label for="return-time">Time</label>
                                    <input type="time" id="return-time" name="return_time" value="">
                                </div>
                            </div>
                            <a href="flightpage.php" class="confirm-link">Change flight</a>
                        </div>
                    </div>
                </section>

                <section class="confirm-section confirm-traveler">
                    <h2 class="confirm-section_title">Traveler information</h2>
                    <div class="confirm-card confirm-card_wide">
                        <div class="confirm-row">
                            <div class="confirm-field">
                                <label for="booking-ref">Booking reference</label>
                                <input type="text" id="booking-ref" name="booking_ref" placeholder="e.g. SKY123456">
                            </div>
                            <div class="confirm-field">
                                <label for="passport">Passport number</label>
                                <input type="text" id="passport" name="passport" placeholder="e.g. N12345678">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="confirm-section confirm-billing">
                    <h2 class="confirm-section_title">Billing summary</h2>
                    <div class="confirm-card confirm-card_billing">
                        <div class="billing-row">
                            <span>Subtotal</span>
                            <span>Rs. 28,900.00</span>
                        </div>
                        <div class="billing-row">
                            <span>Taxes &amp; fees</span>
                            <span>Rs. 4,335.00</span>
                        </div>
                        <div class="billing-row billing-row_total">
                            <span>Total</span>
                            <span>Rs. 33,235.00</span>
                        </div>
                    </div>
                </section>

                <div class="confirm-actions">
                    <a href="paymentportal.php" class="confirm-btn">Confirm and proceed to payment</a>
                </div>
            </form>
        </div>
    </main>

    <?php include "footer.php"; ?>
</body>
</html>
