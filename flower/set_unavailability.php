<?php
  session_start();
  include '../function.php';

  $data = new Flower();
  $data->connectMysql();

  $id = $_POST['id'];

  if ( $data->setUnavailability($id, $_SESSION['id']) )
    echo "Set unavailability.";
