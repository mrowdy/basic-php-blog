<!-- Sidebar Start -->

<?php $categories = getCategories(); ?>

<nav class="box">
    <form class="form searchForm" action="/search.php" method="get">
        <input placeholder="search" type="text" name="search" />
        <input class="button" type="submit" value="go" />
    </form>
</nav>


<nav class="box">
    <h3>About</h3>
    <p>
       A blog with php and mysql for training purpose.
    </p>
</nav>

<nav class="box">
    <h3>Categories</h3>
    <ul>
        <?php foreach($categories AS $categorie): ?>
            <li>&raquo; <a href="/category.php?slug=<?php echo $categorie['slug']; ?>"><?php echo $categorie['name']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<nav class="box">
    <h3>Login</h3>
    <?php include_once '_loginForm.php'; ?>
</nav>
<!-- Sidebar End-->