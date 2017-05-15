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
          "SELECT p.ID id, p.name name, p.price price, p.availability availability,
                  p.description description, COUNT(pu.ID) quantity
           FROM product p LEFT JOIN purchase pu ON (p.ID=pu.id_product)
           WHERE p.id_flower=$flower
           GROUP BY p.ID, p.name, p.price, p.availability, p.description;"
      );
      return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function removeProduct($id, $flower) {
      return $this->connection->query(
        "DELETE FROM product
        WHERE ID=$id and id_flower='$flower';"
      );
    }

    public function setUnavailability($id, $flower) {
      return $this->connection->query(
        "UPDATE product SET availability=0
        WHERE ID=$id and id_flower='$flower';"
      );
    }

    public function setAvailability($id, $flower) {
      return $this->connection->query(
        "UPDATE product SET availability=1
        WHERE ID=$id and id_flower='$flower';"
      );
    }
  }
