<nav class="mainNav">
    <div class="wrap">
        <ul>
            <li><a href="/index.php">Blog</a></li>
            <li><a href="/admin/article.php">Articles</a></li>
            <li><a href="/admin/category.php">Categories</a></li>
            <?php if(auth()): ?>
                <li class="right"><a href="/logout.php">logout <?php echo $_SESSION['username']; ?></a></li>
            <?php else: ?>
                <li class="right"><a href="/login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>