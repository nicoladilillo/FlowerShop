<?php
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  class Config {

      public $servername;
      public $username;
      public $password;
      public $dbname;

      #constructor
      function __construct() {

        this->$servername = $url["host"];
        this->$username = $url["user"];
        this->$password = $url["pass"];
        this->$dbname = substr($url["path"], 1);
      }
  }
