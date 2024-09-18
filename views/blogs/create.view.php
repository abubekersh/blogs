<?php view('partials/nav.php')?>
<main>
    <div class="canvas">
        <form action="/blogs" method="post">
            <div class="blog-title">
                <input type="text" placeholder="Title" name="title" required>
            </div>
            <div class="blog-body">
                <textarea name="body" id="" placeholder="Write The Body Here" rows="13" required></textarea>
            </div>
            <button type="submit">Publish</button>
        </form>
    </div>
</main>
</body>
</html>