<?php
  session_start();

  $db = require_once __DIR__.'/configure.php';
  if(isset($_SESSION['errore']))
    $errore = $_SESSION['errore'];
  else
    $errore = '';
  $_SESSION['errore'] = '';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fioraio</title>
  </head>
  <body>
    <header>
      <h1>Fioraio</h1>
    </header>

    <main>
      <?php
        if( !isset($_SESSION['login_user']) ) {
         if( $errore != '' )
           echo $errore;
         require_once __DIR__.'/log.php';
        }
        else {
          switch ($_SESSION['type']) {
            case 0:
              require_once __DIR__.'/administrator.php';
              break;
            case 1:
              require_once __DIR__.'/flower.php';
              break;
            case 2:
              require_once __DIR__.'/user.php';
              break;
          }
        }
      ?>
    </main>


    <footer>
       @Nicola Dilillo
    </footer>
  </body>
</html>
