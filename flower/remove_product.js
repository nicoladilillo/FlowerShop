$('main .remove').click(function(event){
  event.preventDefault();
  var id = $(this).val();
  console.log(id);

  $.ajax({
    url: "remove_product.php",
    data: { id: id },
    dataType: 'text',
    success: function(msg)
    {
      $('.message').html("<p style='color:red'>" + msg + "</p>").show().delay(1000).fadeOut();
      $('#'+id).hide("fast");
    }
  });
})
