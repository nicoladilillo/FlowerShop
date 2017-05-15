$('.add_flower').submit(function(event) {
  event.preventDefault();

  var formData = new FormData( $('.add_flower')[0] );

  $.ajax({
    type: 'POST',
    url: 'add_flower.php',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'text',
    success: function(msg)
    {
      if(msg !== "Successfully registered flower.") {
        $('.errors').html("<p style='color:red'>" + msg + "</p>");
      }
      else {
        location.reload();
      }
    }
  });
})
