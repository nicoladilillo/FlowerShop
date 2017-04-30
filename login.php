<?php
  include 'function.php';

  $password = $_POST['password'];
  $username = $_POST['username'];
  $choice = $_POST['choice'];

  switch ($choice) {
    case "administrator":
      $data = new Administrator();
      break;
    case "flower":
      $data = new Flower();
      break;
    case "user":
      $data = new Normal();
      break;
  }
  $data->connectMysql();

  #if authenticated
  if($data->logIn($username, $password)) {
    echo "Authenticated.";
    exit;
  }

  echo "*Invalid email or password.";
