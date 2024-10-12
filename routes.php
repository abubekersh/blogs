<?php

$router->get("/",'index.php');
$router->get("/about",'about.php');
$router->get("/blogs",'blogs/index.php');
$router->get("/blogs/discover","blogs/discover.php");
$router->get("/blogs/create",'blogs/create.php');
$router->post("/blogs",'blogs/store.php');
$router->get("/blogs/show","blogs/show.php");
$router->get("/blogs/comment","blogs/comment.php");
$router->get("/register","registration/register.php");
$router->post("/register","registration/store.php");
$router->get("/session/login","session/login.php");
$router->get("/session/logout","session/logout.php");
$router->post("/session","session/start.php");
$router->get("/blogs/delete","blogs/delete.php");
$router->get("/blogs/edit","blogs/edit.php");
$router->post("/blogs/update","blogs/update.php");