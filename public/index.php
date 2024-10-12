<?php
session_start();
const BASE_PATH = __DIR__."/../";
require BASE_PATH.'core/functions.php';
use core\Router;

spl_autoload_register(function ($class){
    $class=strtr($class,"\\","/");
    require base_path($class.".php");
});

$router = new Router();
require base_path('routes.php');

$method = $_POST['__method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route(parse_url($_SERVER['REQUEST_URI'])['path'],$method);

?>