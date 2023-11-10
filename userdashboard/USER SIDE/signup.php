<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><link rel="stylesheet" href="css/signup.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container mt-3">
  <form>
    <div class="row jumbotron box8">
      <div class="col-sm-12 mx-t3 mb-4">
        <h2 class="text-center text-info">Create your account <br> Welcome,Please enter your details</h2>
      </div>

      <div class="col-sm-6 form-group">
        <label for="name-f">First Name</label>
        <input type="text" class="form-control" name="fname" id="firstname" placeholder="Enter your first name" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="name-f">Middle Name(Optional)</label>
        <input type="text" class="form-control" name="fname" id="middlename" placeholder="Enter your middle name" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="name-l">Last name</label>
        <input type="text" class="form-control" name="lname" id="lastname" placeholder="Enter your last name" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="name-l">Suffix(Sr,Jr,II)</label>
        <input type="text" class="form-control" name="lname" id="suffix" placeholder="Enter your last name" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="address-1">Address</label>
        <input type="address" class="form-control" name="Locality" id="address" placeholder="Blk/House no/Street " required>
      </div>

      <div class="col-sm-4 form-group">
        <label for="State">City</label>
        <input type="address" class="form-control" name="State" id="city" placeholder="Enter your city name" required>
      </div>
      <div class="col-sm-2 form-group">
        <label for="zip">Postal-Code</label>
        <input type="zip" class="form-control" name="Zip" id="postalcode" placeholder="Postal-Code" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Country">Country</label>
        <select class="form-control custom-select browser-default">
          <option value="Philippines">Philippines</option>
          
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="dateofbirth" placeholder="" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="sex">Gender</label>
        <select id="sex" class="form-control browser-default custom-select">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="unspesified">Unspecified</option>
        </select>
      </div>
      <div class="col-sm-2 form-group">
        <label for="cod">Barangay</label>
        <select class="form-control browser-default custom-select" id="barangay">
          <option data-countryCode="DZ" value="1">1</option>
          <option data-countryCode="AD" value="2">2</option>
          <option data-countryCode="AO" value="3">3</option>
          <option data-countryCode="AI" value="4">4</option>
          <option data-countryCode="AG" value="5">5</option>
          <option data-countryCode="AR" value="6">6</option>
          <option data-countryCode="AM" value="7">7</option>
          <option data-countryCode="AW" value="8">8</option>
          <option data-countryCode="AU" value="9">9</option>
          <option data-countryCode="AT" value="10">10</option>
          <option data-countryCode="AZ" value="11">11</option>
          <option data-countryCode="BS" value="12">12</option>
          <option data-countryCode="BH" value="13">13</option>
          <option data-countryCode="BD" value="14">14</option>
          <option data-countryCode="BB" value="15">15</option>
          <option data-countryCode="BY" value="16">16</option>
          <option data-countryCode="BE" value="17">17</option>
          <option data-countryCode="BZ" value="18">18</option>
          <option data-countryCode="BJ" value="19">19</option>
          <option data-countryCode="BM" value="20">20</option>
          <option data-countryCode="BT" value="21">21</option>
          <option data-countryCode="BO" value="22">22</option>
          <option data-countryCode="BA" value="23">23</option>
          <option data-countryCode="BW" value="24">24</option>
          <option data-countryCode="BR" value="25">25</option>
          <option data-countryCode="BN" value="26">26</option>
          <option data-countryCode="BG" value="27">27</option>
          <option data-countryCode="BF" value="28">28</option>
          <option data-countryCode="BI" value="29">29</option>
          <option data-countryCode="KH" value="30">30</option>
          
         
        </select>
      </div>
      <div class="col-sm-4 form-group">
        <label for="tel">Phone</label>
        <input type="tel" name="phone" class="form-control" id="phonenumber" placeholder="Enter Your contact number" required>
      </div>

      <div class="col-sm-6 form-group">
        <label for="name-l">Email</label>
        <input type="text" class="form-control" name="lname" id="email" placeholder="Enter your email address" oninput="validateEmail(this.value)" required>
        <div id="emailMessage"></div>
      </div>

      <div class="col-sm-6 form-group">
        <label for="pass2">Password</label>
        <input type="Password" name="cnf-password" class="form-control" id="password" placeholder="Enter your password" oninput="validatePassword(this.value)" required>
        <div id="passwordMessage"></div>
        <input type="checkbox" onclick="showPassword()"> Show Password
      </div>

    
      <a href="login.html">Already have an account?Login Now</a>
      <div class="col-sm-12 form-group mb-0">
       <button class="btn btn-primary float-right" id="submitButton">Continue</button>
      </div>

    </div>
  </form>
</div>
<!-- partial -->
<script>
  function validateEmail(email) {
      // Regular expression for basic email format
      var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

      var emailInput = document.getElementById("email");
      var emailMessage = document.getElementById("emailMessage");

      if (emailRegex.test(email)) {
          // Valid email format
          emailInput.setCustomValidity("");
          emailMessage.innerHTML = "Valid email address";
          emailMessage.style.color = "green";
      } else {
          // Invalid email format
          emailInput.setCustomValidity("Invalid email address");
          emailMessage.innerHTML = "Invalid email address";
          emailMessage.style.color = "red";
      }
  }

  function validatePassword(password) {
      var passwordInput = document.getElementById("password");
      var passwordMessage = document.getElementById("passwordMessage");

      // Regular expression for a password with minimum 6 characters, at least one letter, one number, and one symbol
      var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;

      if (passwordRegex.test(password)) {
          // Password meets the criteria
          passwordInput.setCustomValidity("");
          passwordMessage.innerHTML = "";
      } else {
          // Password does not meet the criteria
          passwordInput.setCustomValidity("Please choose a stronger password. Try a mix of letters, numbers, and symbols.");
          passwordMessage.innerHTML = "Please choose a stronger password. Try a mix of letters, numbers, and symbols.";
          passwordMessage.style.color = "red";
      } 
  }

  function showPassword() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
  }

  document.getElementById('submitButton').addEventListener('click', function(event) {
    event.preventDefault();

    var firstname = document.getElementById('firstname').value;
    var middlename = document.getElementById('middlename').value.trim() === '' ? "N/A" : document.getElementById('middlename').value;
    var lastname = document.getElementById('lastname').value;
    var suffix = document.getElementById('suffix').value.trim() === '' ? "N/A" : document.getElementById('suffix').value;
    var address = document.getElementById('address').value;
    var city = document.getElementById('city').value;
    var postalcode = document.getElementById('postalcode').value;
    var dateofbirth = document.getElementById('dateofbirth').value;
    var sex = document.getElementById('sex').value;
    var barangay = document.getElementById('barangay').value;
    var phonenumber = document.getElementById('phonenumber').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var data = {
      first_name : firstname,
      middle_name : middlename,
      last_name : lastname,
      suffix : suffix,
      address : address,
      city : city,
      postal_code : postalcode,
      country : "Philippines",
      date_of_birth : dateofbirth,
      gender : sex,
      barangay : barangay,
      phone_number : phonenumber,
      email: email,
      password: password
    }

    fetch('https://phplaravel-1160073-4043249.cloudwaysapps.com/api/register', {
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

          // Redirect to login.html or perform other actions as needed
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
