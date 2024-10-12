<?php
function base_path($path){
    return BASE_PATH.$path;
}
function uric($url){
    if($_SERVER['REQUEST_URI'] === '/blogs/discover'){
        if($url === $_SERVER['REQUEST_URI'])
        return true; 
    }
    else{
    if(substr($_SERVER['REQUEST_URI'],0,6) === $url or $_SERVER['REQUEST_URI'] === $url )
        return true;
    }
   return false;  
}
function view($path,$attributes=[]){
    extract($attributes);
    require base_path('views/'.$path);
}
function dd($value){
    echo "<pre>";
    var_dump($value);
    die();
    echo "</pre>";
}