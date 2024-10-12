<?php view('partials/nav.php');?>

<div class="form-container">
    <form action="/session" method="post">
        <h2>Login To Your Account</h2>
        <div><input type="email" name="email" placeholder="Email"></div>
        <div><input type="password" name="password" placeholder="Password"></div>
        <button type="submit">Login</button>
        <?php
            echo $error?"<p>".$error[0]."</p>":"";
        ?>
    </form>
</div>
</body>
</html>