<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Airline</title>
  <link rel="stylesheet" href="airform.css">
</head>
<body>

  <div class="container">
    <div class="content">
      <form action="airformprocess.php" method="post">

        <div class="add_airline_header item">
          ADD AIRLINE
        </div>

          <div class="item">
          <input  name="a_name" type="text" placeholder="Airline name"> 
          </div>
 
          <div class="item">
          <input name="a_country" type="text" placeholder="Airline country"> 
          </div>

          <div class="item">
          <input name="f_name" type="text" placeholder="flight number"> 
          </div>

          <div class="item save_btn">
            <button name="save">Save</button>
          </div>
      </form>
    </div>
  </div>

</body>
</html>