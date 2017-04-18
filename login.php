<?php
  include 'function.php';

  $password = $_POST['password'];
  $username = $_POST['username'];

  $data = new User();
  $data->connectMysql();

  #if authenticated
  if($data->logIn($username, $password)) {
    echo "Authenticated.";
    exit;
  }

  echo "*Invalid email or password.";
