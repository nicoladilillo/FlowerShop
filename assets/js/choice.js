$('button').click(function(event) {
  event.preventDefault();
  var choice = $(this).val();

  $.ajax({
    url: 'log.php',
    success: function(data)
    {
      $('main').html(data);
      $('strong').html(choice);
      $('.choice').val(choice);
      if ( choice == "user" )
        $('.form-signin').append('<button type=button onclick=window.open("user/signup.php")>SignUp</button>');
      if ( choice == "flower" )
        $('.form-signin').append('<p>Contact an administrator to Sign Up</p>');
    }
  });
});
