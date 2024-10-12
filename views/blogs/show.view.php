<?php view('partials/nav.php')?>
<main>
    <div class="blog-post">
        <img src=<?= "/images/blog/{$result['banner']}" ?> alt="">
        <div>
            <h2><?= $result['title']?></h2>
            <p><?= $result['content']?></p>
            <div class="meta">
                <p>Author- <?= $result['author']?></p>
                <p>Blog type- <?= $result['category']?></p>
                <p>Date- <?= $result['date']?></p>
                <?php if($author_id === $current_user){?>
                <button><a href="/blogs/edit?id=<?=$result['id']?>">edit</a></button>
                <button><a href="/blogs/delete?id=<?=$result['id']?>">delete</a></button>
                <?php }?>
            </div>
        </div>
    </div>
    <section>
        <div class="comments">
            <div>
                <h3>Comments</h3>
            </div>
            <form action="/blogs/comment" method="get">
                <div class="send">
                    <textarea name="comment" id="" placeholder="write comment here" cols="60" rows="4" maxlength="150"></textarea>
                    <input type="hidden" name="post-id" value="<?= $result['id']?>">
                    <button>send</button>
            </div>
            </form>
            <?php foreach ($comments as $cmt) {?>
            <p>
                <span>Anonymos</span><br>
                <?= $cmt['comment']?>
            </p>
            <?php }?>
            <p><?=$comments?"No More Comments":"No Comments Yet"?></p>
        </div>
        <div class="other-blogs">
            <div>
                <h3>similar blogs</h3>
            </div>
            <?php foreach ($similar as $post) {?>
                <div>
                    <p><a href="/blogs/show?id=<?=$post['id']?>"><?=$post['title']?></a></p>
                </div>
            <?php }?>
        </div>
    </section>
</main>
    
</body>
</html>