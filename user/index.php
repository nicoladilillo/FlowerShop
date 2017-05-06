<?php $type = "user"; require('../partial/head.php'); ?>

    <form method="POST" action="count.php" class="buy">

      <?php
        require 'all_product.php';
      ?>
      <button type="submit">Buy</button>
    </form>

  </body>
</html>
