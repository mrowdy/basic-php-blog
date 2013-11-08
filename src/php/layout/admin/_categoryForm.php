<form action="/admin/edit-category.php" method="post">
    <input type="text" name="name" value="<?php echo $category['name'] ?>" placeholder="name" />
    <input type="hidden" name="action" value="<?php echo $action ?>" />
    <?php if($action == 'edit'): ?>
    <input type="hidden" name="id" value="<?php echo $category['id'] ?>" />
    <?php endif; ?>
    <input type="hidden" name="save" value="1" />
    <input type="submit" value="save" />
</form>