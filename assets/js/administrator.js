$('button').click(function(event){
  event.preventDefault();

  $('.button').hide();
  $.ajax({
    url: 'add_flower.html',
    success: function(data)
    {
      $('body').html(data);
    }
  });
})
