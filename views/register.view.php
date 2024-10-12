<?php view('partials/nav.php');?>

<div class="form-container">
    <form action="/register" method="post">
        <h2>Register new User</h2>
        <div><input type="email" name="email" placeholder="Email"></div>
        <div><input type="password" name="password" placeholder="Password"></div>
        <button type="submit">Register</button>
        <?php
            echo $error['password']?"<p>".$error['password']."</p>":"";
            echo $error['email']?"<p>".$error['email']."</p>":"";
        ?>
    </form>
</div>
</body>
</html>