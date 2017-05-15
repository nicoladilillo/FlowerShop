<?php
  session_start();
  include '../function.php';

  $data = new Flower();
  $data->connectMysql();

  $row = $data->listTrade($_SESSION['id']);
  echo "<ul>";
  foreach ($row as $row) {
    echo
    "<li>".strtoupper($row->name).":
      $row->price € x $row->quantity
      <small> was bougth by </small> <span style='font-style: italic'>$row->username</span>
      <br /><small  style='color:grey'>$row->date</small>
    </li>";
  }
  echo "</ul>";
