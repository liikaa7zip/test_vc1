<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/ListController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);

// User
$route->get("/users", [UserController::class, 'index']);


$route->get("/list/list", [ListController::class, 'index']);

$route->route();