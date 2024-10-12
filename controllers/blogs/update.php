<?php

use core\Database;

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$config = require base_path("config.php");
$db = new Database($config);
$db->query("update post set title = ? ,content = ? where id = ?",[$title,$content,$id]);
header('location: /blogs');
die();