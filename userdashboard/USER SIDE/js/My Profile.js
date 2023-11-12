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

var receivedName = receivedData['user']['first_name'] + " " + receivedData['user']['last_name'];
var receivedAddress = receivedData['user']['address'];
var receivedPhone = receivedData['user']['phone_number'];

document.getElementById('name').value = receivedName;
document.getElementById('address').value = receivedAddress;
document.getElementById('phone').value = receivedPhone;

var receivedEmail = receivedData['user']['email'];

document.getElementById('email').value = receivedEmail;