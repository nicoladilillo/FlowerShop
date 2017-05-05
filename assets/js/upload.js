/*************** JS CODE USED FOR SIGN-UP and LOGIN ********/
$('.form-signin').submit(function(event) {
  event.preventDefault();

  var username = $('.username').val();
  var password = $('.password').val();
  var choice = $('.choice').val();

  $.ajax({
    type: "POST",
    url: "login.php",
    data: {
      password: password,
      username: username,
      choice: choice
    },
    dataType: 'text',
    success: function(msg)
    {
       if(msg !== "Authenticated.") {
         $('.errors').html("<p style='color:red'>" + msg + "</p>");
       }
       else window.open(choice, "_self");
    }
  });
});


$('.form-signup').submit(function(event){
  event.preventDefault();
  var formData = new FormData($('.form-signup')[0]);

  $.ajax({
    type: "POST",
    url: "sign.php",
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'text',
    success: function(msg)
    {
       if(msg !== "Successfully registered.") {
         $('.errors').html("<p style='color:red'>" + msg + "</p>");
       }
       else $('.login').trigger('click');
    }
  });
});
