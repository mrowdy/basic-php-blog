<nav class="mainNav">
    <div class="wrap">
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Imprint</a></li>
            <li><a href="#">Contact</a></li>
            <?php if(auth()): ?>
                <li><a href="/admin/article.php">admin</a></li>
                <li class="right"><a href="/logout.php">logout <?php echo $_SESSION['user_name']; ?></a></li>
            <?php else: ?>
                <li class="right"><a href="/login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>