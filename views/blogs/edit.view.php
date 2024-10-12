<?php view('partials/nav.php')?>
<main>
    <div class="canvas">
        <form action="/blogs/update" method="POST" enctype="multipart/form-data">
            <div class="blog-title">
                <input type="text" placeholder="Title" name="title" value ="<?= $result['title']?>" required>
            </div>
            <div class="blog-body">
                <input type="hidden" name="id" value="<?= $result['id']?>">
                <textarea name="content" id="" placeholder="Write The Body Here" rows="9" required><?= $result['content']?> </textarea>
                <br> <br> <br> <br>
            </div>
            
            <button type="submit">Update</button>
        </form>
    </div>
</main>
</body>
</html>