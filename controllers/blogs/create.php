<?php

$user_id = $_SESSION['user_id'];

view('blogs/create.view.php',['user_id'=>$user_id]);