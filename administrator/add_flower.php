<?php
  include '../function.php';

  $username = $_POST['username'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmation = $_POST['confirmation'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $telefon = $_POST['telefon'];
  $owner = $_POST['owner'];

  $data = new Administrator();
  $data->connectMysql();

  /******** CHECK SAME PASSWORD *******/
  if( $password !== $confirmation ) {
    echo "Please insert equal passwords.";
    exit;
  }

  /********** CHECK USERNAME *********/
  if( $data->isRegistered($username) ) {
    echo "Username already exists.";
    exit;
  }

  $data->addFlower($username,
            $name,
            $email,
            $password,
            $city,
            $address,
            $telefon,
            $owner);
  echo "Successfully registered flower.";
