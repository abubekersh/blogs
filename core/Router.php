<?php
namespace core;
class Router{
    protected $routes = [];

    function add($uri,$controller,$method){
        $this->routes[] =['uri'=>$uri,'controller'=>$controller,'method'=>$method];
    }
    function get($uri,$controller){
        $this->add($uri,$controller,'GET');
    }
    function post($uri,$controller){
        $this->add($uri,$controller,'POST');
    }
    function delete($uri,$controller){
        $this->add($uri,$controller,'DELETE');
    }
    function patch($uri,$controller){
        $this->add($uri,$controller,'PATCH');
    }
    function route($uri,$method){
        foreach ($this->routes as $route) {
            if ($uri === $route['uri'] && $route['method'] === strtoupper($method)) {
                require base_path('controllers/'.$route['controller']);
            }
        }
    }
}
