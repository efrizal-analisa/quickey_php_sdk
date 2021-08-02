<?php

require_once './Config.php';
use \Unirest;

class Auth
{
    public $apiKey;
  
    function __construct($apiKey) {
      $this->apiKey = $apiKey;
    }

    public function getAccessTokenByEmail(string $email, string $provider): object
    {
        $headers = array('Accept' => 'application/json', 'Authorization' => $this->apiKey);
        $data = array('email' => $email, 'provider' => $provider);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(Config::$BASE_URL . '/loginCustomer', $headers, $body);
        return $response->body;
    }    

    public function getAccessTokenByPhone(string $phone, string $provider): object
    {
        $headers = array('Accept' => 'application/json', 'Authorization' => $this->apiKey);
        $data = array('phone' => $phone, 'provider' => $provider);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(Config::$BASE_URL . '/loginCustomer', $headers, $body);
        return $response->body;
    }    

    public function linkPhoneToEmail(string $phone, string $provider): object
    {
        $headers = array('Accept' => 'application/json', 'Authorization' => $this->apiKey);
        $data = array('phone' => $phone, 'provider' => $provider);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(Config::$BASE_URL . '/otp/linkToEmail', $headers, $body);
        return $response->body;
    }    
};