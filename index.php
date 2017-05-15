<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Flower Shop</title>
    <link rel="icon" href="./assets/img/flower-icon.png">
    <script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
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
