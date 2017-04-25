<?php
  include '../function.php';

  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];

  $data = new Flower();
  $data->connectMysql();

  $data->addProduct($name, $price, $description, $_SESSION['id']);
