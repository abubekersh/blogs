<?php view('partials/nav.php')?>

<main>
    <h1>Blog posts</h1>
    <div class="blog">
        <?php foreach ($result as $value) {?>
            <?php  copy(base_path("resources/blog/{$value['banner']}"),"images/blog/{$value['banner']}");?>
            <div class="post">
                <h2><?=$value['title']?></h2>
                <p><?=substr($value['content'],0,700);?></p>
                <a href="/blogs/show?id=<?= $value['id']?>" class="see-more">
                    <p>full blog </p>
                    <p class="arr"> &rArr; </p>
                </a>

            </div>
        <?php }?>
    </div>
</main>
</body>
</html>