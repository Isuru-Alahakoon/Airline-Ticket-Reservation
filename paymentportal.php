<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Portal</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="paymentportal.css">
</head>
<body>

<?php
    
    include "nav.php";
    
    ?>

    <div class="container">

        <!-- Payment Portal Section -->
        <section class="payment-portal">
            <h2>Payment Portal</h2>
            <form>
                <div class="total-payment">
                    <label>Total Payment: </label>
                    <input type="text" disabled value="Rs. *****.00">
                </div>

                <div class="payment-type">
                    <h3>Select Payment Type</h3>
                    <label><input type="radio" name="payment-type" value="Visa"> Visa</label>
                    <label><input type="radio" name="payment-type" value="Master"> Master</label>
                    <label><input type="radio" name="payment-type" value="Amex"> Amex</label>
                </div>

                <div class="card-details">
                    <label>Card Holder's Name*</label>
                    <input type="text" required>

                    <div class="expiration">
                        <div>
                            <label>Expiration Month*</label>
                            <input type="text" placeholder="MM" required>
                        </div>
                        <div>
                            <label>Expiration Year*</label>
                            <input type="text" placeholder="YYYY" required>
                        </div>
                    </div>

                    <label>CVN*</label>
                    <input type="text" placeholder="XXX" required>
                    <small>This code is a three or four-digit number printed on the back of your card</small>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button type="submit" class="pay-button">Pay</button>
                    <button type="button" class="cancel-button">Cancel</button>
                </div>
            </form>
        </section>
    </div>

    <div class="footerr">
    <div class="footer">
  <div class="itemm ii1">
    <div class="ss">
      <img src="images/logo.jpg" alt="">
    </div>
    <p class="topicc"><b>Skyticket</b></p>
  </div>

  <div class="itemm ii2">
    <div class="dd dd1"></div>

    <div class="dd dd2">
      <p class="pp1">Support</p>
      <br>
      <ul>
        <li>Coronavirus (COVID-19) FAQs</li>
        <li>Manage your trips</li>
        <li>Contact Customer Service</li>
        <li>Safety resource center</li>
      </ul>
    </div>

    <div class="dd dd3"></div>

    <div class="dd dd4">
      <p class="pp1">Terms and settings</p>
      <br>
      <ul>
        <li>Privacy & cookies</li>
        <li>Terms and conditions</li>
        <li>Partner dispute</li>
        <li>Modern Slavery Statement</li>
        <li>Human Rights Statement</li>
      </ul>
    </div>

    <div class="dd dd5"></div>

    <div class="dd dd6">
      <p class="pp1">About</p>
      <br>
      <ul>
        <li>About our site</li>
        <li>How we work</li>
        <li>Sustainability</li>
        <li>Press center</li>
        <li>Careers</li>
        <li>Investor relations</li>
        <li>Corparate contact</li>
      </ul>
    </div>

    <div class="dd dd7"></div>
  </div>

  <div class="ii5">
    <div class="itemm ii3">

      <div><p class="cc">@copyright</p></div>  
      <div class="kk"><a href="#">Terms & Conditions</a></div>  
      <div class="kk"><a href="#">Privacy</a></div>  
      <div class="kk"><a href="#">Cookies</a></div>
    </div>

    <div class="itemm ii4">
      <div class="mediaa">
        <img src="images/fb.png" alt="">
      </div>
      <div class="mediaa">
        <img src="images/insta.png" alt="">
      </div>

      <div class="mediaa">
        <img src="images/whats.png" alt="">
      </div>

      <div class="mediaa">
        <img src="images/twitter.png" alt="">
      </div>
    </div>

  </div>

  </div>

    </div>

</body>
</html>