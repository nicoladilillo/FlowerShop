<?php $type = "user"; require('../partial/head.php'); ?>

  <?php
    include '../function.php';

    $data = new Normal();
    $data->connectMysql();

    $row = $data->allProduct();
    $import = 0;
    foreach ($row as $row)
    {
      if ( $_POST[$row->id] > 0 ) {
        $import = $import + ( $_POST[$row->id] * $row->price );
        $data->purchase($row->id, $_SESSION['id'], $_POST[$row->id]);
      }
    }

    echo "The price is: $import €";
  ?>

</body>
</html>
