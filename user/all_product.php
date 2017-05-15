<?php
  include '../function.php';

  $data = new Normal();
  $data->connectMysql();

  $row = $data->allProduct();
  foreach ($row as $row) {
    echo
    "
      <div style='display: block; width: 300px; padding: 20px;'>
        <p>
          <span style='font-weight: bold'>".strtoupper($row->name)."</span>
          ".$row->price."€
          <input name='".$row->id."' type='number' value='0' style='width: 40px; float: right'/>
          <blockquote style='font-style: italic'>
          <small style='color:grey'>$row->description</small>,
          send by $row->flower
          </blockquote>
        </p>
      </div>
    ";
  }
