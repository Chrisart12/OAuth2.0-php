<?php 

if(!function_exists('config')) {
	function config($path) {
        $files = explode('.', $path);

        $configs = require dirname(__DIR__). DIRECTORY_SEPARATOR. 'config' .DIRECTORY_SEPARATOR. $files[0] .'.php';
      
        return $configs[$files[1]];
    }
}


if(!function_exists('env')) {
	function env($name, $default = null) {
        return $_ENV[$name]  ?? $default;
    }
}