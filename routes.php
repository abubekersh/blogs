<?php

$router->get("/",'index.php');
$router->get("/about",'about.php');
$router->get("/blogs",'blogs/index.php');
$router->get("/blogs/create",'blogs/create.php');
$router->post("blogs/",'blogs/store.php');
