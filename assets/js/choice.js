$('button').click(function(event) {
  event.preventDefault();
  var choice = $(this).val();

  $.ajax({
    type: 'POST',
    url: 'log.php',
    success: function(data)
    {
      $('main').html(data);
      $('strong').html(choice);
      $('.form-signin').append("<input type='hidden' name='choice' class='choice' value='" + choice +"' />")
    }
  });
});
