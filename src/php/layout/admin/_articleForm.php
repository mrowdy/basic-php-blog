<form action="/admin/edit-article.php" method="post">
    <input type="text" name="title" value="<?php echo $article['title'] ?>" placeholder="title" />
    <textarea placeholder="teaser" name="teaser"><?php echo $article['teaser'] ?></textarea>
    <textarea placeholder="content" name="content"><?php echo $article['content'] ?></textarea>
    <input type="hidden" name="action" value="<?php echo $action ?>" />
    <?php if($action == 'edit'): ?>
        <input type="hidden" name="id" value="<?php echo $article['id'] ?>" />
    <?php endif; ?>
    <input type="hidden" name="save" value="1" />
    <input type="submit" value="save" />
</form>