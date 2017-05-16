<?php
  class Config {
      $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

      public $servername = $url["host"];
      public $username = $url["user"];
      public $password = $url["pass"];
      public $dbname = substr($url["path"], 1);
  }
