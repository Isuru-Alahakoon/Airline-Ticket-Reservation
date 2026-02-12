<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Airline</title>
  <link rel="stylesheet" href="passengerform.css">
</head>
<body>

  <div class="container">
   
    <div class="content">
    <p>Input Passenger</p>
      <form action="passengerformprocess.php" method="post">
          <div>
          <input name="P_id" type="text" placeholder="Passenger id"> 
          </div>
 
          <div>
          <input name="P_no" type="text" placeholder="Passenger number"> 
          </div>

          <div>
          <input name="Pa_no" type="text" placeholder="Passport number"> 
          </div>

          <div>
          <input name="P_name" type="text" placeholder="Passenger name"> 
          </div>

          <div>
          <input name="P_Email" type="text" placeholder="Passenger email"> 
          </div>

          <div>
          <input name="S_no" type="text" placeholder="Seat number"> 
          </div>

          <div>
          <input name="T_id" type="text" placeholder="Ticket id"> 
          </div>

          <div>
            <button name="save">Save</button>
          </div>
      </form>
    </div>
  </div>

</body>
</html>