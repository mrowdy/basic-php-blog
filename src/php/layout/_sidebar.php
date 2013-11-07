<?php $categories = getCategories(); ?>

<nav class="box whiteBox">
    <h3>Categories</h3>
    <ul>
        <?php foreach($categories AS $categorie): ?>
            <li><a href="/category.php?slug=<?php echo $categorie['slug']; ?>"><?php echo $categorie['name']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>