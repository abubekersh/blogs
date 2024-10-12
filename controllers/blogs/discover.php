<?php
use core\Database;


$config = require base_path('config.php');
$db = new Database($config,'root','12345678');

$result = $db->query("select * from post order by title")->fetchAll(PDO::FETCH_BOTH);
view('blogs/discover.view.php',['result'=>$result]);