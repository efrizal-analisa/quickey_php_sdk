<?php

require_once './Config.php';
use \Unirest;

class App
{
    public $apiKey;
  
    function __construct($apiKey) {
      $this->apiKey = $apiKey;
    }

    public function getMetaData(): object
    {
        $headers = array('Accept' => 'application/json');
        $data = array('apiKey' => $this->apiKey);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(Config::$BASE_URL . '/auth/apiKey', $headers, $body);
        return $response->body;
    }

    public function sendSMSOTP(string $phone, string $provider): object
    {
        $headers = array('Accept' => 'application/json', 'Authorization' => $this->apiKey);
        $data = array('phone' => $phone, 'provider' => $provider);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(Config::$BASE_URL . '/otp/sendToUserPhone', $headers, $body);
        return $response->body;
    }    
};
