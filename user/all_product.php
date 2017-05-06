<?php
  include '../function.php';

  $data = new Normal();
  $data->connectMysql();

  $row = $data->allProduct();
  foreach ($row as $row) {
    echo
    "
      <div>
        <h2>".strtoupper($row->name)."</h2>
        <div class='prezzo'>
          <p>".$row->price." €</p>
          <input name='".$row->ID."' type='number' value='0' />
        </div>
      </div>
    ";
  }
