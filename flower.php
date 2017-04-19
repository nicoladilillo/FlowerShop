<?php
  class Flower extends User
  {

    function __construct()
    {
      parent::__construct();
      $this->table = 'flower';
    }
  }
