<?php

use core\Database;

$comment=$_GET['comment'];
$id =$_GET['post-id'];
$config = require base_path('config.php');
$db = new Database($config);
$result = $db->query("insert into comment(comment,post) values(?,?)",[$comment,$id]);
header("location: /blogs/show?id=$id");