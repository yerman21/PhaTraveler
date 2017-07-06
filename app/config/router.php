<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet("/home/busca/",array(
	"controller"=>"Home",
	"action"=>"busca",));
$router->addGet("/home/restaurante/",array(
	"controller"=>"Home",
	"action"=>"restaurante",));
$router->handle();
