<?php

$key = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
	"/" => "views/index.view.php",
	"/home" => "controllers/home.php",
	"/about" => "controllers/about.php",
	"/contact" => "controllers/contact.php",
];


function routeToController($key,$routes){
	if(array_key_exists($key,$routes)){
		require($routes["$key"]);
	}else{
		require('errorsHandler/error.php');
	}
}

routeToController($key,$routes);