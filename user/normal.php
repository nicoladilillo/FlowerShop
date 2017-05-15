<?php
  class Normal extends User
  {

    function __construct()
    {
      parent::__construct();
      $this->table = 'user';
    }

    #Insert new account
    public function signUp($email, $pass, $name, $surname, $username) {

      $this->connection->query(
        "INSERT INTO $this->table(email, password, name, surname, username)
         VALUES('$email', '$pass', '$name', '$surname', '$username');
        "
      ) or die($this->connection->error);

    }

    #Return true if the username already exits, else return false
    public function isRegistered($username) {

      $result = $this->connection->query(
          "SELECT email
           FROM $this->table
           WHERE username='$username';
          "
      );
      $row = $result->fetchAll(PDO::FETCH_OBJ);
      if( $row ) return true;
      return false;
    }

    #See all product to buy
    public function allProduct() {
      $result = $this->connection->query(
          "SELECT *
           FROM product;"
      );
      return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function purchase($product, $user, $quantity) {
      $today = date("Y/m/d");
      $this->connection->query(
          "INSERT INTO purchase (id_user, id_product, Date, quantity)
           VALUES ($user, $product, '$today', $quantity);"
      );
    }

    public function listPurchase($user) {
      $result = $this->connection->query(
          "SELECT p.name name, p.price price, pu.quantity quantity, pu.Date date
           FROM (product p INNER JOIN purchase pu ON (p.ID=pu.id_product))
           INNER JOIN user u ON (pu.id_user=u.ID);"
      );
      return $result->fetchAll(PDO::FETCH_OBJ);
    }
  }
