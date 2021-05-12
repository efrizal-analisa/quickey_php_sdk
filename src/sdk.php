<?php
namespace SDK;
require_once dirname(__FILE__).'\vendor\mashape\unirest-php\src\Unirest.php';

class Quickey
{
    public static string $BASE_URL = "https://api.getquickey.com";

    public function app(string $apiKey): object
    {
        $headers = array('Accept' => 'application/json');
        $data = array('apiKey' => $apiKey);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(QuickeySDK::$BASE_URL . '/auth/apiKey', $headers, $body);
        return $response->body;    
    }

    public static function auth(string $userEmail): object
    {
        $headers = array('Accept' => 'application/json');
        $data = array('email' => $userEmail);
        $body = Unirest\Request\Body::form($data);
        $response = Unirest\Request::post(QuickeySDK::$BASE_URL . '/loginRegister', $headers, $body);
        return $response->body;
    }   
}