<?php


require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/Router.php';
require_once 'src/Controller/TaskController.php';
require_once 'src/Model/TaskModel.php';

$url = $_SERVER['REQUEST_URI'];

$router = new Router();
$router->handleRequest($url);
