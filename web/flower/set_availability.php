<?php
  session_start();
  include '../function.php';

  $data = new Flower();
  $data->connectMysql();

  $id = $_POST['id'];

  if ( $data->setAvailability($id, $_SESSION['id']) )
    echo "Set availability.";
