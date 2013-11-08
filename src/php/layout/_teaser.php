<!-- Teaser Start-->
<article class="article teaser box whiteBox">
    <h2 class="articleTitle"><a href="/article.php?id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></h2>
    <?php if($article['image']): ?>
        <a href="/article.php?id=<?php echo $article['id']; ?>"><img class="articleImage" src="images/<?php echo $article['image']; ?>" /></a>
    <?php endif; ?>
    <div class="articleContent">
        <p>
            <?php echo $article['teaser']; ?>
        </p>
         <span class="meta">
            <?php $category = getCategoryById($article['category_id']); ?>
             <?php $user = getUserById($article['user_id']); ?>

             posted by <?php echo $user['username']; ?> in <a href="/category.php?slug=<?php echo $category['slug']; ?>"><?php echo $category['name']; ?></a>

            on <?php echo date('d.m.Y', $article['date_created']); ?>

        </span>
    </div>
</article>
<!-- Teaser End-->