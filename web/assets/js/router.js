$('button').click(function(event){
  event.preventDefault();
  var link = $(this).val();

  $('.button').hide();
  $.ajax({
    url: link,
    cache: false,
    success: function(data)
    {
      $('main').html(data);
    }
  });
})
