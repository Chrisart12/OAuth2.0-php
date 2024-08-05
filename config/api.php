<?php 

include '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



// define("CLIENT_ID", "1077539686544-22g1lqp4dpipapegoc11hsuue2hljhv1.apps.googleusercontent.com");
// define("CLIENT_SECRET", "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");
// define("REDIRECT_URI", "http://localhost:8000/connect.php"); 
return [
    'client_id' => env("CLIENT_ID"),
    'client_secret' => env("CLIENT_SECRET"),
    'redirect_uri' => env("REDIRECT_URI")
];

// define("CLIENT_ID", "540784773566-lvmgfsgcopfa2la13ko49hvksoctl6h3.apps.googleusercontent.com");
// define("CLIENT_SECRET", "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");
// define("REDIRECT_URI", "http://localhost:8000/connect.php"); 