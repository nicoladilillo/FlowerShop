$('.add_product').submit(function(event) {
  event.preventDefault();

  var formData = new FormData( $('.add_product')[0] );

  $.ajax({
    type: 'POST',
    url: 'add_product.php',
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    dataType: 'text',
    success: function(msg)
    {
      if(msg !== "Successfully add product.") {
        $('.errors').html("<p style='color:red'>" + msg + "</p>");
      }
      else {
        location.reload();
      }
    }
  });
})
