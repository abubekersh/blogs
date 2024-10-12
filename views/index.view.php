<?php view('partials/nav.php')?>
    <div class="container">
        <div class="blogs">
            <?php if($_SESSION){?>
            <a href="/blogs">My Blogs</a>
            <?php }
            else{
            ?>
            <a href="/register">register</a>
            <?php }?>
        </div>
        <?php if(!$_SESSION){?>
        <div class="about">
            <a href="/session/login">login</a>
        </div>
            <?php }
            ?>
    </div>
</body>
</html>