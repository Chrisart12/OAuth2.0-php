<?php 
    

    require 'vendor/autoload.php';

    // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    // $dotenv->load();

    include './config/api.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Se connectelllr</h1>

    <a 
        href="https://accounts.google.com/o/oauth2/v2/auth?scope=email&access_type=online&response_type=code&redirect_uri=<?= urlencode(config('api.redirect_uri')) ?>&client_id=<?= config('api.client_id') ?>">
        Se connecter avec Google
    </a>

</body>
</html>
