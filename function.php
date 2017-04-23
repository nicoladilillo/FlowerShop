<?php
  session_start();
  include 'config.php';

  /************************** MYSQL HANDLER *************************/
  Class User {

    public $connection;
    public $table;
    private $conf;
    public $status = " "; //a testing variable

    #constructor
    function __construct() {

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

      #Check login
      public function logIn($username, $password) {
        $result = $this->connection->query(
            "SELECT *
             FROM $this->table
             WHERE username='$username' && password='$password';
            "
        );
        $row = $result->fetchAll(PDO::FETCH_OBJ);
        if( !isset($row[0]) ) return false;

        return true;
      }
}

  include 'administrator/administrator.php';
  include 'flower.php';
  include 'normal.php';
