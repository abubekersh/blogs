<?php view('partials/nav.php')?>
<main>
    <div class="canvas">
        <form action="/blogs" method="POST" enctype="multipart/form-data">
            <div class="blog-title">
                <input type="text" placeholder="Title" name="title" required>
            </div>
            <div class="blog-body">
                <textarea name="body" id="" placeholder="Write The Body Here" rows="9" required></textarea>
                <label for="author">Author <input type="text" name="author" id="author" placeholder="author"></label>
                <br>
                <label for="banner">Image <input type="file" name="banner" id="banner" title="banner image"></label>
                <br>
                <label for="cat">Category <select name="category">
                    <option value="tech">technology</option>
                    <option value="story">story</option>
                    <option value="lifestyle">lifestyle</option>
</select>
                
            </label>
            </div>
            
            <button type="submit">Publish</button>
        </form>
    </div>
</main>
</body>
</html>