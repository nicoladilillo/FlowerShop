<?php
  session_start();
  include '../function.php';

  $data = new Flower();
  $data->connectMysql();

  $row = $data->allProduct($_SESSION['id']);
  echo "<div class=message></div>";
  echo "<ul>";
  foreach ($row as $row) {
    echo "<li>" . $row->name . " " . $row->price . " " . $row->description . "</li>
          <button class=remove name=$row->ID value=$row->ID>Remove</button><br />";
  }
  echo "</ul>";
?>
<script src="remove_product.js"></script>
