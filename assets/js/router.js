$('button').click(function(event){
  event.preventDefault();
  var link = $(this).val();

  $('.button').hide();
  $.ajax({
    url: link,
    success: function(data)
    {
      $('main').html(data);
    }
  });
})
