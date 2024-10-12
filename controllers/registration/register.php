<?php
if ($_SERVER['REQUEST_METHOD'] === 'post') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    dd($email);

}
view('register.view.php');