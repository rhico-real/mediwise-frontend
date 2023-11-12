<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Doctors Registration Form</title>
  <link rel="stylesheet" href="css/doctors.css">

</head>
<body>
<!-- partial:index.partial.php -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Doctors Registration Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/doctors.css">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <header class="card-header">
            <h4 class="card-title mt-2">Doctor Registration Form</h4>
          </header>
          <article class="card-body">
            <form>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>First Name</label>
                  <input type="text" class="form-control" id="first_name" placeholder="First Name" required>
                </div>

                <div class="form-group col-md-6">
                  <label>Middle Name(Optional)</label>
                  <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" required>
                </div>

                <div class="form-group col-md-6">
                  <label>Last Name</label>
                  <input type="text" class="form-control" id="last_name" placeholder="Last Name" required>
                </div>

                <div class="form-group col-md-6">
                  <label>Suffix(Sr,Jr,II)</label>
                  <input type="text" class="form-control" id="suffix" placeholder="Suffix" required>
                </div>

                <div class="form-group col-md-6">
                  <label>Mobile Number</label>
                  <input type="text" class="form-control" id="phone_number" placeholder="Mobile Number" required>
                </div>

                <div class="form-group col-md-6">
                  <label>Doctors Registration Number</label>
                  <input type="text" class="form-control" id="doctors_registration_number" placeholder="Doctors Registration Number" required>
                </div>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="password" placeholder="********" required>
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="********" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id="registerButton">Register</button>
                <div class="mt-2">
                  Already have an account? <a href="#">Login</a>
                </div>
              </div>
            </form>
          </article>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<!-- partial -->

<script>
  document.getElementById('registerButton').addEventListener('click', function(event) {
    event.preventDefault();

    var firstname = document.getElementById('first_name').value;
    var middlename = document.getElementById('middle_name').value.trim() === '' ? "N/A" : document.getElementById('middlename').value;
    var lastname = document.getElementById('last_name').value;
    var suffix = document.getElementById('suffix').value.trim() === '' ? "N/A" : document.getElementById('suffix').value;
    var phonenumber = document.getElementById('phone_number').value;
    var doctorsRegistrationNumber = document.getElementById('doctors_registration_number').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var data = {
      first_name : firstname,
      middle_name : middlename,
      last_name : lastname,
      suffix : suffix,
      phone_number : phonenumber,
      doctors_registration_number : doctorsRegistrationNumber,
      email: email,
      password: password
    }

    fetch('https://phplaravel-1160073-4043249.cloudwaysapps.com/api/registerDoctor', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify(data)
      })
      .then(response => response.json())
      .then(data => {
          // Handle the API response data here
          console.log(data);

          // Redirect to login.php or perform other actions as needed
          alert("Registration successful.");
      })
      .catch(error => {
          // Handle errors here
          console.error('Error:', error);
      });
  });
</script>
</body>
</html>
