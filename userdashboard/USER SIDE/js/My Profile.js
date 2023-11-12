$("document").ready(function () {

    var textmax=500;
   
    $("#count").text(textmax + ' character left');
    
    $("#bio").keyup(function(){
        
        var userlenght= $("#bio").val().length;
        
        var remain= textmax - userlenght ;

        $("#count").text(remain + ' characters left');
        
    });
    
});





document.getElementById('getval').addEventListener('change', readURL, true);
function readURL(){
    var file = document.getElementById("getval").files[0];
    var reader = new FileReader();
    reader.onloadend = function(){
        document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";        
    }
    if(file){
        reader.readAsDataURL(file);
    }else{
    }
}









$(function () {
  var $text = $('#texte');
  var $input = $('.texte');
  $input.on('keydown', function () {
    setTimeout(function () {
      $text.php($input.val());
    }, 0);
  });
})

var jsonString = localStorage.getItem('profile');

// Parse the JSON string to get the original object
var receivedData = JSON.parse(jsonString);

console.log(receivedData);
console.log(receivedData['user']['first_name']);

var receivedFirstName = receivedData['user']['first_name'];
var receivedLastName = receivedData['user']['last_name'];
var receivedAddress = receivedData['user']['address'];
var receivedPhone = receivedData['user']['phone_number'];

document.getElementById('first_name').value = receivedFirstName;
document.getElementById('last_name').value = receivedLastName;
document.getElementById('address').value = receivedAddress;
document.getElementById('phone').value = receivedPhone;

var receivedEmail = receivedData['user']['email'];

document.getElementById('email').value = receivedEmail;

document.getElementById('updateProfileButton').addEventListener('click', function(event) {
  event.preventDefault();

  var firstName = document.getElementById('first_name').value;
  var lastName = document.getElementById('last_name').value;
  var address = document.getElementById('address').value;
  var phone = document.getElementById('phone').value;
  var email = document.getElementById('email').value;

  var data = {
    first_name: firstName,
    last_name: lastName,
    address: address,
    phone_number: phone,
    email: email,
  }

  fetch('https://phplaravel-1160073-4043249.cloudwaysapps.com/api/updateUser', {
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
        alert("Update User Successful.");
    })
    .catch(error => {
        // Handle errors here
        console.error('Error:', error);
    });
});