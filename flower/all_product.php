<?php
  session_start();
  include '../function.php';

  $data = new Flower();
  $data->connectMysql();

  $row = $data->allProduct($_SESSION['id']);
  echo "<div class=message></div>";
  echo "<form method=POST><ul>";
  foreach ($row as $row) {
    echo "<li id=$row->ID>" . $row->name . " " . $row->price . " " . $row->description . "
          <button class=remove value=$row->ID>Remove</button><br /></li>";
  }
  echo "</form></ul>";
?>
<script src="remove_product.js"></script>
