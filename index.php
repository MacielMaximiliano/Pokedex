<?php
include_once ("Configuration.php");




$controller = isset($_GET['controller']) ? $_GET['controller'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : '';

$router =configuration::getRouter();
$router->route($controller,$action);
