<?php
  include '../function.php';

  $data = new Normal();
  $data->connectMysql();

  $row = $data->allProduct();
  $import = 0;
  $q = 0;
  foreach ($row as $row)
  {
    $q = $_POST[$row->name];
    $import = $import + ($q[0] * $row->price);
  }

  echo "The price is: $import €";
