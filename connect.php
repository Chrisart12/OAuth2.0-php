<?php 

require 'vendor/autoload.php';

include './config/api.php';

use GuzzleHttp\Client;

$client = new Client([
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

try {
   
    $response = $client->request('POST', 'https://oauth2.googleapis.com/token', [
        'form_params' => [
            'code' => $_GET['code'],
            'client_id' => CLIENT_ID,
            'client_secret' => CLIENT_SECRET,
            'redirect_uri' => REDIRECT_URI,
            'grant_type' => 'authorization_code',
    
        ]
    ]);

} catch (\GuzzleHttp\Exception\ClientException $th) {
    //throw $th;
    dd($th->getMessage());
}



dd((string)$response->getBody());


?>