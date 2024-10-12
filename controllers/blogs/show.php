<?php

use core\Database;

$blogId = $_GET['id'];
$config= require base_path("config.php");
$db = new Database($config,"root","12345678");

$current_user = $db->query('select id from Author where user_id = ?',[$_SESSION['user_id']])->fetch();
$current_user = $current_user['id'];
$result = $db->query("select * from post where id = ?",[$blogId])->fetch(PDO::FETCH_BOTH);
$author_id=$result['author'];
$comments =$db->query("select * from comment where post = ? order by id desc",[$blogId])->fetchAll(PDO::FETCH_ASSOC);
$author = $db->query("select name from Author where id = ?",[$result['author']])->fetch(PDO::FETCH_BOTH);

$similar = $db->query("select title,id from post where category = ? and id != ? limit 7",[$result['category'],$blogId])->fetchAll();
$result['author']=$author['name'];
view("blogs/show.view.php",["result"=>$result,"similar"=>$similar,"comments"=>$comments,'current_user'=>$current_user,'author_id'=>$author_id]);