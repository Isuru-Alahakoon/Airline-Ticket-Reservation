<?php
$from = isset($_GET['from']) ? htmlspecialchars($_GET['from']) : '';
$to = isset($_GET['to']) ? htmlspecialchars($_GET['to']) : '';
$depart = isset($_GET['depart_date']) ? htmlspecialchars($_GET['depart_date']) : '';
$return = isset($_GET['return_date']) ? htmlspecialchars($_GET['return_date']) : '';
$route_label = trim($from && $to ? $from . ' → ' . $to : 'Flights');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select your flight – Skyticket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="flightpage.css">
</head>
<body class="page-wrapper">
    <?php include "nav.php"; ?>

    <main class="flight-page">
        <div class="flight-page_inner">
            <header class="flight-header">
                <h1 class="flight-title"><?php echo $route_label; ?></h1>
                <?php if ($depart): ?>
                <p class="flight-dates"><?php echo $depart; ?><?php if ($return) echo ' – ' . $return; ?></p>
                <?php endif; ?>
            </header>

            <section class="flight-summary">
                <div class="flight-summary_card">
                    <span class="flight-summary_label">Best price</span>
                    <span class="flight-summary_price">From Rs. 28,900</span>
                </div>
            </section>

            <section class="flight-results">
                <div class="flight-list">
                    <article class="flight-card">
                        <div class="flight-card_airline">
                            <img src="images/images.png" alt="Airline" class="flight-card_logo">
                            <span class="flight-card_name">Skyticket Air</span>
                        </div>
                        <div class="flight-card_times">
                            <div class="flight-card_time">
                                <span class="flight-card_time_value">08:30</span>
                                <span class="flight-card_time_label">Departure</span>
                            </div>
                            <div class="flight-card_duration">— 2h 15m —</div>
                            <div class="flight-card_time">
                                <span class="flight-card_time_value">10:45</span>
                                <span class="flight-card_time_label">Arrival</span>
                            </div>
                        </div>
                        <div class="flight-card_action">
                            <p class="flight-card_price">Rs. 28,900</p>
                            <a href="airform.php" class="flight-card_btn">Select</a>
                        </div>
                    </article>

                    <article class="flight-card">
                        <div class="flight-card_airline">
                            <img src="images/istockphoto-1258141375-612x612.jpg" alt="Airline" class="flight-card_logo">
                            <span class="flight-card_name">Pacific Airways</span>
                        </div>
                        <div class="flight-card_times">
                            <div class="flight-card_time">
                                <span class="flight-card_time_value">12:00</span>
                                <span class="flight-card_time_label">Departure</span>
                            </div>
                            <div class="flight-card_duration">— 2h 30m —</div>
                            <div class="flight-card_time">
                                <span class="flight-card_time_value">14:30</span>
                                <span class="flight-card_time_label">Arrival</span>
                            </div>
                        </div>
                        <div class="flight-card_action">
                            <p class="flight-card_price">Rs. 32,500</p>
                            <a href="airform.php" class="flight-card_btn">Select</a>
                        </div>
                    </article>

                    <article class="flight-card">
                        <div class="flight-card_airline">
                            <img src="images/istockphoto-1200320810-612x612.jpg" alt="Airline" class="flight-card_logo">
                            <span class="flight-card_name">Skyline Express</span>
                        </div>
                        <div class="flight-card_times">
                            <div class="flight-card_time">
                                <span class="flight-card_time_value">15:45</span>
                                <span class="flight-card_time_label">Departure</span>
                            </div>
                            <div class="flight-card_duration">— 2h 05m —</div>
                            <div class="flight-card_time">
                                <span class="flight-card_time_value">17:50</span>
                                <span class="flight-card_time_label">Arrival</span>
                            </div>
                        </div>
                        <div class="flight-card_action">
                            <p class="flight-card_price">Rs. 35,200</p>
                            <a href="airform.php" class="flight-card_btn">Select</a>
                        </div>
                    </article>

                    <article class="flight-card">
                        <div class="flight-card_airline">
                            <img src="images/still-42f973cda0f5b83e1ea4259ba18d6823.png" alt="Airline" class="flight-card_logo">
                            <span class="flight-card_name">Global Fly</span>
                        </div>
                        <div class="flight-card_times">
                            <div class="flight-card_time">
                                <span class="flight-card_time_value">19:00</span>
                                <span class="flight-card_time_label">Departure</span>
                            </div>
                            <div class="flight-card_duration">— 2h 20m —</div>
                            <div class="flight-card_time">
                                <span class="flight-card_time_value">21:20</span>
                                <span class="flight-card_time_label">Arrival</span>
                            </div>
                        </div>
                        <div class="flight-card_action">
                            <p class="flight-card_price">Rs. 31,800</p>
                            <a href="airform.php" class="flight-card_btn">Select</a>
                        </div>
                    </article>
                </div>

                <p class="flight-disclaimer">Prices are per person, for e-tickets, and include all taxes &amp; fees in Rs. They may be subject to change.</p>

                <div class="flight-proceed">
                    <form action="flightconfirmation.php" method="get">
                        <button type="submit" class="flight-proceed_btn">Proceed to next step</button>
                    </form>
                </div>
            </section>
        </div>
    </main>

    <?php include "footer.php"; ?>

    <script src="flightpage.js"></script>
</body>
</html>
