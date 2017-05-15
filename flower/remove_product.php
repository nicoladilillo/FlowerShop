<?php
  session_start();
  include '../function.php';

  $data = new Flower();
  $data->connectMysql();

  $id = $_GET['id'];

  if ( $data->removeProduct($id, $_SESSION['id']) )
    echo "Successfully remove product.";
  else
    echo "You can't remove this product";
