<?php
  session_start();
  if( strcmp($_SESSION['type'], $type) != 0 || !isset($_SESSION['id']) ) {
    header("Location: ../index.php");
  }
  else {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo($type) ?></title>
    <link rel="icon" href="./assets/img/flower-icon.png">
    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  </head>
  <body>
    Come back...<button type=button onclick="window.open('../', '_self')">Home</button><br />
<?php } ?>
