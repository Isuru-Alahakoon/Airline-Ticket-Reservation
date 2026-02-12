<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Ticket</title>
  <link rel="stylesheet" href="ticketform.css">
</head>
<body>

  <div class="container">
    <div class="content">

    <p>
      Enter ticket Details
      
    </p>
      <form action="ticketprocess.php" method="post">
          
      <br>
          <div>
          <input name="bookingdate" type="date" placeholder="Booking Date"> 
          </div>
          <br>

          <div>
          <input name="seatno" type="text" placeholder="Seat Number"> 
          </div>

          <br>

          <div>
          <input name="price" type="text" placeholder="Ticket Price"> 
          </div>
          <br>

          <div>
          <input name="fid" type="text" placeholder="Flight ID"> 
          </div>
          <br>

          <div>
            <button name = "save">Save</button>
          </div>
      </form>
    </div>
  </div>

</body>
</html>