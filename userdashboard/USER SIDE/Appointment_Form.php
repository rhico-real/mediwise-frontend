<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Appointment Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
<script type="text/javascript" src="https://github.com/rubyeffect/easy_fill/tree/master/lib/easy_fill-0.0.1.min.js"></script>
  <title>Appointment Form</title>
  <link rel="stylesheet" type="text/css" href="css/Appointment Form.css" />
</head>

<body>
  <div id="container">
    <!--This is a division tag for body container-->
    <div id="body_header">
      <!--This is a division tag for body header-->
      <h1>Appointment Form</h1>
      <p>Make your appointments more easier</p>

    </div>
    <form action="index.html" method="post">
      <fieldset>
        <legend><span class="number">1</span>Your basic details</legend>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name" placeholder="Lastname,Firstname, Middlename" >

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email" placeholder="example@gmail.com" required>

     


      </fieldset>

      <fieldset>
        <legend><span class="number">2</span>Appointment Details</legend>
        <label for="appointment_for">Appointment :</label>
        <select id="appointment_for" name="appointment_for" required>
          <option value="coffee">Consultation with prescription</option>
          <option value="meeting">Consultation without prescription</option>
        </select>
        
        <label for=""></label>
        
        <label for="date">Date:</label>
        <input type="date" name="date" value="" required></input>
        <br>
           
      </fieldset>
      <button type="submit">Request For Appointment</button>
    </form>
  </div>
</body>

</html>
<!-- partial -->
  
</body>
</html>
