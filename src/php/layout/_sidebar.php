<?php $categories = getCategories(); ?>

<nav class="box whiteBox">
    <h3>Categories</h3>
    <ul>
        <?php foreach($categories AS $categorie): ?>
            <li><a href="/category.php?slug=<?php echo $categorie['slug']; ?>"><?php echo $categorie['name']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<nav class="box whiteBox">
    <h3>Search</h3>
    <form action="/search.php" method="get">
        <input type="text" name="search" />
        <input type="submit" value="search" />
    </form>
</nav>

<nav class="box whiteBox">
    <h3>Login</h3>
    <?php include_once '_loginForm.php'; ?>
</nav>