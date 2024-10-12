<?php
use core\Database;
$email = $_POST['email'];
$password = $_POST['password'];
$config = require base_path("config.php");
$error = [];
$db = new Database($config);
$user = $db->query("select * from users where email = ?",[$email])->fetch();
if($user and password_verify($password,$user['password']) ){
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] =$user['email'];
    header('location: /');
    exit();
}
$error[]="wrong email or password";
view('login.view.php',['error'=>$error]);