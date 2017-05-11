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

    #See all product to send
    public function allProduct($flower) {
      $result = $this->connection->query(
          "SELECT *
           FROM product
           WHERE id_flower=$flower;"
      );
      return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function removeProduct($id, $flower) {
      return $this->connection->query(
        "DELETE FROM product
        WHERE ID=$id and id_flower='$flower';"
      );
    }
  }
