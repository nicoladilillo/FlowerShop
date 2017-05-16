<?php
  class Config {

      public $servername;
      public $username;
      public $password;
      public $dbname;
      private $inf = getenv("CLEARDB_DATABASE_URL");

      #constructor
      function __construct() {

        $url = parse_url($this->inf);

        $this->$servername = $url["host"];
        $this->$username = $url["user"];
        $this->$password = $url["pass"];
        $this->$dbname = substr($url["path"], 1);
      }
  }
