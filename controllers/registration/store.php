<?php

use core\Database;

$email = $_POST['email'];
$password = $_POST['password'];
$config = require base_path("config.php");
$error = [];
$db = new Database($config);

if($db->query("select * from users where email = ?",[$email])->fetch()){
    $error["email"]="There was a problem with your registration. Please try again.";
}
if(strlen($password) < 8 or strlen($password) > 20){
    $error['password'] = "password must be greater than 7 and less than 20 characters";
}
if(!$error){
    $password = password_hash($password,PASSWORD_DEFAULT);
    $newUser = $db->query("insert into users(email,password) values(?,?)",[$email,$password]);
    header("location: /session/login");
    die();
}
view("register.view.php",["error"=>$error]);