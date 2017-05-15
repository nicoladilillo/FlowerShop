<?php
  session_start();
  include '../function.php';

  $data = new Flower();
  $data->connectMysql();

  $row = $data->allProduct($_SESSION['id']);
  echo "<div class=message></div>";
  echo "<ul>";
  foreach ($row as $row) {
    echo "<li>" . strtoupper($row->name) . ": " . $row->price .
          "€<br /><small style='color:grey'> " . $row->description . "</small><br />";
    if ( $row->quantity == 0 )
      echo "<button class=remove value=$row->id id=$row->id >Remove</button>";
    else {
      if ( $row->availability == 0 )
        echo "<button class=unavailability value=$row->id id=$row->id >Set availability</button>";
      else
        echo "<button class=availability value=$row->id id=$row->id >Set unavailability</button>";
    }
    echo "</li><br />";
  }
  echo "</ul>";
?>

<script src="remove_product.js"></script>
<script src="set_unavailability.js"></script>
<script src="set_availability.js"></script>
<script>
  $('main').unbind('click');
</script>
