<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Airline</title>
  <link rel="stylesheet" href="ticketupdate.css">
</head>
<body>

  <div class="container">
    <div class="content">
      <form action="flightadd.php" method="post">
          
          <div>

          <input name="Flight_no" type="int" placeholder="Flight_no"> 
          </div>

          <br>

          <div>
          <input name="Date" type="date" placeholder="Date"> 
          </div>

          <br>

          <div>

        <input name="Depature_time" type="time" placeholder="Departure_time"> 
        </div>

        <br>

        <div>
        <input name="Arrival_time" type="time" placeholder="Arrival_time"> 
        </div>

        <br>

        <div>
        <input name="Destination" type="text" placeholder="Destination"> 
        </div>

        <br>

        <div>
        <input name="Duration" type="time" placeholder="Duration"> 
        </div>

        <br>

        <div>
        <input name="Flight_status" type="time" placeholder="flight_status"> 
        </div>

        <br>

          <div>
            <button name="save">Save</button>
          </div>
      </form>
    </div>
  </div>

</body>
</html>