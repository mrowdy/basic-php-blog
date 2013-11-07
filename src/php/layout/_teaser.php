<article class="article teaser box whiteBox">
    <?php if($article['image']): ?>
        <a href="/article.php?id=<?php echo $article['id']; ?>"><img class="articleImage" src="images/<?php echo $article['image']; ?>" /></a>
    <?php endif; ?>
    <h2 class="articleTitle"><a href="/article.php?id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></h2>
    <div class="articleContent">
        <span class="meta">
            <?php $category = getCategoryById($article['category_id']); ?>
            <?php $user = getUserById($article['user_id']); ?>

            posted by <?php echo $user['username']; ?> in <a href="/category.php?slug=<?php echo $category['slug']; ?>"><?php echo $category['name']; ?></a>

            on <?php echo date('d.m.Y', $article['date_created']); ?>

        </span>
        <p>
            <?php echo $article['teaser']; ?>
        </p>
    </div>
</article>