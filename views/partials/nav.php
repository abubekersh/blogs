<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><img src="/images/logo.png" alt="" width="30px" height="auto"></li>
                <li class="<?= uric("/")?"current":"other" ?>"><a href="/">Home</a></li>
                <?php if($_SERVER['REQUEST_URI']!=='/'):?>
                <?php if($_SESSION):?>
                <li class="<?= uric("/blogs")?"current":""?>"><a href="/blogs">My Blogs</a></li>
                <?php endif;?>
                <?php endif;?>
                <li class="<?= uric("/blogs/discover")?"current":""?>"><a href="/blogs/discover">Discover</a></li>
                <?php if($_SESSION){?>
                <li class="<?= uric("/session/logout")?"current":""?>"><a href="/session/logout">Logout</a></li>
                <?php }else{?>
                <li class="<?= uric("/register")?"current":""?>"><a href="/register">Register</a></li>
                <li class="<?= uric("/session/login")?"current":""?>"><a href="/session/login">Login</a></li>
                <?php }?>
            </ul>
        </nav>
    </header>