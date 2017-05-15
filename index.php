<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Flower Shop</title>
    <script src="./vendor/components/jquery/jquery.js"></script>
    <link rel="icon" href="./assets/img/flower-icon.png">
  </head>
  <body>
    <header>
      <h1>Fioraio</h1>
    </header>

    <main>
      <?php
        if ( !isset($_SESSION['id']) )
          require 'choice.php';
        else { ?>
          <p>
            You are logged like <?php echo($_SESSION['type']) ?>
          </p>
          <button type=button onclick="window.open('<?php echo($_SESSION['type']) ?>', '_self')">Go</button>
          <button type=button onclick="window.open('logout.php', '_self')">Log Out</button>
        <?php } ?>
    </main>

    <footer>
       @Nicola Dilillo
    </footer>
  </body>
</html>
