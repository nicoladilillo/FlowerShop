$('main .remove').click(function(event){
  event.preventDefault();
  var id = $(this).val();

  $.ajax({
    url: "remove_product.php",
    data: { id: id },
    success: function(msg)
    {
      $('.message').html("<p style='color:red'>" + msg + "</p>");
      $(this).remove();
    }
  });
})
