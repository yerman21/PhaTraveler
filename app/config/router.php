<?php

$router = $di->getRouter();

// Define your routes here

$router->addGet("/home/busca/",array(
	"controller"=>"Home",
	"action"=>"busca",));
$router->addGet("/restaurante/busca/",array(
	"controller"=>"Restaurante",
	"action"=>"busca",));
$router->handle();
