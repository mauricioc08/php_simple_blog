<?php
    include_once("./templates/header.php");
?>
    <main>
        <div class="titleContainer">
            <h1>Blog Codar!!</h1>
            <p>O seu blog de programação...</p>
        </div>
        <div class="postsContainer">
            <?php foreach($posts as $post):?>
                <div class="postBox">
                    <img src="./img/<?= $post['img']?>" alt="<?= $post['title']?>" />
                    <h2 class="postTitle">
                       <a href="./post.php?id=<?=$post['id']?>"><?= $post['title']?></a> 
                    </h2>
                    <p class="postDescription"><?=$post['description']?></p>
                    <div class="tagsContainer">
                       <?php foreach($post['tags'] as $tag): ?>
                        <a href="#"><?= $tag ?></a>
                       <?php endforeach; ?> 
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
<?php
    include_once("./templates/footer.php");
?>
    
    