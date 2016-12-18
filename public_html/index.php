<?php

use App\Components\View;
use App\Components\E404Exception;

// Display ALL errors, warnings etc
error_reporting(E_ALL);
ini_set('display_errors', 1);


$path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$pathParts = explode('/',$path);

$ctrl = !empty($pathParts[1]) ? ucfirst($pathParts[1]) . 'Controller' : 'TaskController';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'Index';

$controllerClassName = 'App\\Controllers\\' . $ctrl;

require __DIR__ . '/autoload.php';

try {

        $controller = new $controllerClassName;
        $method = 'action' . $act;
        $controller->$method();

} catch (PDOException $e) {
    $error = new View();
    $error->error = $e->getMessage();
    $error->display('403.php');
    die;
} catch (E404Exception $e) {
    $error = new View();
    $error->error = $e->getMessage();
    $error->display('404.php');
    die;
}
