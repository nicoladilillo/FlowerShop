$(document).ready(function(){
  $('.availability').click( function() {
    var id = $(this).val();

    $.ajax({
      type: "POST",
      url: "set_unavailability.php",
      data: { id: id },
      dataType: 'text',
      success: function(msg)
      {
        $('.message').html("<p style='color:red'>" + msg + "</p>").show().delay(1000).fadeOut();
        $('#'+id).attr("class", "unavailability").html("Set availability");
      }
    });
  });
});
