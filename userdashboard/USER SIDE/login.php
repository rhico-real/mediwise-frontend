<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="monetization" content="$ilp.uphold.com/WUdKN2pAgLAG" /><link rel="stylesheet" href="css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form method="get" action="javascript: void(0);" id="login-form" class="login-form" autocomplete="off" role="main">
  <h1 class="a11y-hidden">Login Form</h1>
  <div>
    <label class="label-email">
      <input type="email" id="email" class="text" name="email" placeholder="Email" tabindex="1" required />
      <span class="required">Email</span>
    </label>
  </div>
  <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
  <label class="label-show-password" for="show-password">
    <span>Show Password</span>
  </label>
  <div>
    <label class="label-password">
      <input type="text" id="password" class="text" name="password" placeholder="Password" tabindex="2" required />
      <span class="required">Password</span>
    </label>
  </div>
  <input type="submit" id="submitButton" value="Log In" />

  <div class="email">
    <a href="#">Forgot password?</a> <br>
    <a href="Signup.html">Don’t have an account? Register Now</a>
  </div>
  <figure aria-hidden="true">
    <div class="person-body"></div>
    <div class="neck skin"></div>
    <div class="head skin">
      <div class="eyes"></div>
      <div class="mouth"></div>
    </div>
    <div class="hair"></div>
    <div class="ears"></div>
    <div class="shirt-1"></div>
    <div class="shirt-2"></div>
  </figure>
</form>
<!-- partial -->
  
<script>
  document.getElementById('submitButton').addEventListener('click', function(event) {
    event.preventDefault();

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var data = {
      email: email,
      password: password
    }

    fetch('https://phplaravel-1160073-4043249.cloudwaysapps.com/api/login', {
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
          alert("Login Successful.");
      })
      .catch(error => {
          // Handle errors here
          console.error('Error:', error);
      });
  });
  </script>
</body>
</html>
