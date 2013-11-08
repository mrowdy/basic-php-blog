<!-- Nvigation End -->
<nav class="mainNav">
    <div class="wrap">
        <ul>
            <li><a href="/index.php">Blog</a></li>
            <li><a href="/about.php">About</a></li>
            <li><a href="/imprint.php">Imprint</a></li>
            <li><a href="/contact.php">Contact</a></li>
            <?php if(auth()): ?>
                <li><a href="/admin/article.php">admin</a></li>
                <li class="right"><a href="/logout.php">logout <?php echo $_SESSION['user_name']; ?></a></li>
            <?php else: ?>
                <li class="right"><a href="/login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<!-- Navigation Start -->