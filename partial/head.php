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
    <link rel="icon" href="/assets/img/flower-icon.png">
    <script src="/vendor/components/jquery/dist/jquery.js"></script>
  </head>
  <body>
    Come back...<button type=button onclick="window.open('../', '_self')">Home</button><br />
<?php } ?>
