<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Flower Shop</title>
    <script src="bower_components/jquery/dist/jquery.js"></script>
  </head>
  <body>
    <header>
      <h1>Fioraio</h1>
    </header>

    <main>
      <?php
        if ( !isset($_SESSION['id']) )
          require 'choice.php';
        else {
          echo "You are logged like " . $_SESSION['type'];
          echo "<button type=button onclick=window.open('logout.php')>Log Out</button>";
        };
      ?>
    </main>

    <footer>
       @Nicola Dilillo
    </footer>
  </body>
</html>
