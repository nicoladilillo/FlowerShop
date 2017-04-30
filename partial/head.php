<?php
  session_start();
  if( strcmp($_SESSION['type'], $type) != 0 ) {
    header_remove();
    header("Location: ../index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo($type) ?></title>
  </head>
  <body>
