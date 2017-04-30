<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>user</title>
  </head>
  <body>

    <form method="POST" action="count.php" class="buy">

      <?php
        require 'all_product.php';
      ?>
      <button type="submit">Buy</button>
    </form>

    <script src="../bower_components/jquery/dist/jquery.js"></script>

  </body>
</html>
