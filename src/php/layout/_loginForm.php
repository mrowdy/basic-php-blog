<div class="form loginForm">
    <?php if(isset($error) && !empty($error)): ?>
        <span class="loginError"><?php echo $error; ?></span>
    <?php endif; ?>
    <form action="/login.php" method="post">
        <div class="formRow">
            <input type="text" autocomplete="off" name="username" placeholder="username" value="<?php echo isset($username)?$username:''; ?>"/>
        </div>
        <div class="formRow">
            <input type="password" autocomplete="off" name="password" placeholder="password" />
        </div>
        <div class="formRow">
            <input type="hidden" name="action" value="login" />
            <input class="button" type="submit" value="login" />
        </div>
    </form>
</div>