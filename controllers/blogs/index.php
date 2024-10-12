<?php
use core\Database;
$user_id = $_SESSION['user_id'];

$config = require base_path('config.php');
$db = new Database($config,'root','12345678');
$author_id = $db->query("select id from Author where user_id = ?",[$user_id])->fetch(PDO::FETCH_ASSOC);

$result = $db->query("select * from post where author = ? order by id desc",[$author_id['id']])->fetchAll(PDO::FETCH_BOTH);

view('blogs/index.view.php',['result'=>$result]);