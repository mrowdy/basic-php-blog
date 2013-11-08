<div class="loginForm">
    <span class="loginError"><?php echo $error; ?></span>
    <form action="/login.php" method="post">
        <input type="text" name="username" placeholder="username" value="<?php echo $username; ?>"/>
        <input type="password" name="password" placeholder="password" />
        <input type="hidden" name="action" value="login" />
        <input type="submit" value="login" />
    </form>
</div>