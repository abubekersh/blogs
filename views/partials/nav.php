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
                <li><a href="/">Home</a></li>
                <?php if($_SERVER['REQUEST_URI']!=='/'):?>
                <li><a href="/blogs">Blogs</a></li>
                <li><a href="/about">About</a></li>
                <?php endif;?>
                <li><a href="/socials">My Socials</a></li>
            </ul>
        </nav>
    </header>