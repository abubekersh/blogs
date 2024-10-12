<?php
use core\Database;
// session_start();
$user_id = $_SESSION['user_id'];
// $email = $_SESSION['email'];
// $config = require base_path('config.php');
// $db = new Database($config,'root','12345678');
// $author_id = $db->query("select id from Author where user_id = ?",[$user_id])->fetch();
// if(!$author_id){
//     $db->query('insert into Author(name,user_id) values(?,?)',[$email,$user_id]);
//     $author_id = $db->lastId();
// }
// dd($user_id);
view('blogs/create.view.php',['user_id'=>$user_id]);