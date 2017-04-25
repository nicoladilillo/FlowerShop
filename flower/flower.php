<?php
  class Flower extends User
  {

    function __construct()
    {
      parent::__construct();
      $this->table = 'flower';
    }

    public function addProduct($name, $price, $description, $flower) {
      $this->connection->query(
        "INSERT INTO product (name, price, id_flower, description)
         VALUES('$name', $price, $flower, '$description');"
      ) or die($this->connection->error);
    }
  }
