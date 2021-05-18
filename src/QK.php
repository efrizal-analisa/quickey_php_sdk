<?php
namespace QK\SDK;
use \Unirest;

class Quickey
{
    public static string $BASE_URL = "https://api.getquickey.com";

    public function app(string $apiKey): object
    {
        $headers = array('Accept' => 'application/json');
        $data = array('apiKey' => $apiKey);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(Quickey::$BASE_URL . '/auth/apiKey', $headers, $body);
        return $response->body;    
    }

    public function auth(string $userEmail): object
    {
        $headers = array('Accept' => 'application/json');
        $data = array('email' => $userEmail);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(Quickey::$BASE_URL . '/loginRegister', $headers, $body);
        return $response->body;
    }   
}