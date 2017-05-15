<?php
  session_start();
  include '../function.php';

  $data = new Normal();
  $data->connectMysql();

  $row = $data->listPurchase($_SESSION['id']);
  echo "<ul>";
  foreach ($row as $row) {
    echo
    "<li>".strtoupper($row->name).":
      $row->price x $row->quantity<br />
      <small  style='color:grey'>$row->date</small>
    </li>";
  }
  echo "</ul>";
