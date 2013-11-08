<!-- Article Start -->
<article class="article box whiteBox">
    <h1 class="articleTitle"><a href="/article.php?id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></h1>
    <?php if($article['image']): ?>
        <a href="/article.php?id=<?php echo $article['id']; ?>"><img class="articleImage" src="images/<?php echo $article['image']; ?>" /></a>
    <?php endif; ?>
    <div class="articleContent">

        <p class="articleTeaser bold">
            <?php echo $article['teaser']; ?>
        <p>
            <?php echo $article['content']; ?>
        </p>
        <span class="meta">
            <?php $category = getCategoryById($article['category_id']); ?>
            <?php $user = getUserById($article['user_id']); ?>

            posted by <?php echo $user['username']; ?> in <a href="/category.php?slug=<?php echo $category['slug']; ?>"><?php echo $category['name']; ?></a>

            on <?php echo date('d.m.Y', $article['date_created']); ?>
        </span>
    </div>
</article>
<!-- Article End -->