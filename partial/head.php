<?php
  session_start();
  if( strcmp($_SESSION['type'], $type) != 0 || !isset($_SESSION['id']) ) {
    header_remove();
    header("Location: ../index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo($type) ?></title>
    <script src="../bower_components/jquery/dist/jquery.js"></script>
  </head>
  <body>
    Come back...<button type=button onclick="window.open('../', '_self')">Home</button><br />
