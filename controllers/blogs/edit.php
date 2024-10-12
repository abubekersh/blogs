<?php

use core\Database;

$id = $_GET['id'];
$config = require base_path('config.php');
$db = new Database($config);
$result = $db->query("select * from post where id = ?",[$id])->fetch(PDO::FETCH_ASSOC);
// dd($result);
view('blogs/edit.view.php',["result"=>$result]);