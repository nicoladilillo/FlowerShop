<?php $type = "user"; require('../partial/head.php'); ?>

  <?php
    include '../function.php';

    $data = new Normal();
    $data->connectMysql();

    $row = $data->allProduct();
    $import = 0;
    foreach ($row as $row)
    {
      if ( $_POST[$row->ID] > 0 ) {
        $import = $import + ( $_POST[$row->ID] * $row->price );
        $data->purchase($row->ID, $_SESSION['id'], $_POST[$row->ID]);
      }
    }

    echo "The price is: $import €";
  ?>

</body>
</html>
