<?php

use core\Database;

$id = $_GET['id'];
$config = require base_path('config.php');
$db = new Database($config);
$db->query("delete from post where id = ?",[$id]);
header('location: /blogs');
die();