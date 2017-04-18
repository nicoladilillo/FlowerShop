<?php
  session_start();
  include 'config.php';

  /************************** MYSQL HANDLER *************************/
  Class User {

    public $connection;
    private $conf;
    public $status = " "; //a testing variable
    private $tabe;

    #constructor
    function __construct() {

      $this->table = 'user';
      $this->conf = new Config();
    }

    # Connect to the Database
    public function connectMysql() {
      try {
        $this->connection = new PDO(
          "mysql:host={$this->conf->servername};
          dbname={$this->conf->dbname};charset=utf8",
          $this->conf->username,
          $this->conf->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      #Check connection
      catch(PDOException $e) {
         die(
           'Connection failed. There was an error: '.$e->getMessage()
         );
       }
       $this->status = "Connected to the server. <br>";

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

      #Check login
      public function logIn($username, $password) {
        $result = $this->connection->query(
            "SELECT name, surname
             FROM $this->table
             WHERE username='$username' && password='$password';
            "
        );
        $row = $result->fetchAll(PDO::FETCH_OBJ);
        if( $row === 0 ) return false;

        $_SESSION['name'] = $row[0]->name;
        $_SESSION['surname'] = $row[0]->surname;
        $_SESSION['username'] = $username;
        return true;
      }
}
