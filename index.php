<?php
$request = $_SERVER['REQUEST_URI'];

require_once '../Szabo_Roland_Feladat/controllers/HomeController.php';
require_once '../Szabo_Roland_Feladat/controllers/UserController.php';
require_once '../Szabo_Roland_Feladat/controllers/AdvertisementController.php';

switch ($request) {
    case '/' :
    case '/Szabo_Roland_Feladat/' :
        $controller = new \controllers\HomeController();
        $controller->index();
        break;
    case '/Szabo_Roland_Feladat/views/users' :
        $controller = new \controllers\UserController();
        $controller->index();
        break;
    case '/Szabo_Roland_Feladat/views/advertisements' :
        $controller = new \controllers\AdvertisementController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}