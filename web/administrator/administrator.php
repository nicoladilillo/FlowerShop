<?php
  class Administrator extends User
  {

    function __construct()
    {
      parent::__construct();
      $this->table = 'administrator';
    }

    #Just administrator can add flower
    public function addFlower($username,
                    $name,
                    $email,
                    $password,
                    $city,
                    $address,
                    $telefon,
                    $owner)
    {
      $this->connection->query(
        "INSERT INTO flower (username, name, email, password,
          city, address, telefon, owner)
         VALUES('$username', '$name', '$email', '$password',
                '$city', '$address', '$telefon', '$owner');"
      ) or die($this->connection->error);
    }

    #Return true if the username already exits, else return false
    public function isRegistered($username) {

      $result = $this->connection->query(
          "SELECT email
           FROM flower
           WHERE username='$username';
          "
      );
      $row = $result->fetchAll(PDO::FETCH_OBJ);
      if( $row ) return true;
      return false;
    }

  }
