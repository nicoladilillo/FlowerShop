<?php
  include '../function.php';

  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmation = $_POST['confirmation'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];

  $data = new Normal;
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

  /* IF EVERYTHING IS OKAY, STORE THE NEW USER INFORMATIONS */
  $data->signUp($email, $password, $name, $surname, $username);
  echo "Successfully registered.";
