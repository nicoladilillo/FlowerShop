<?php
  class Normal extends User
  {

    function __construct()
    {
      parent::__construct();
      $this->table = 'user';
    }
  }
