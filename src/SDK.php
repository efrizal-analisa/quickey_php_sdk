<?php
require_once './App.php';
require_once './Auth.php';
use \Unirest;

class Quickey
{
    public $app;
    public $auth;
  
    function __construct($apiKey) {
      $this->app = new App($apiKey);
      $this->auth = new Auth($apiKey);
    }
};

