<!-- CategoryForm Start -->
<form class="form editForm" action="/admin/edit-category.php" method="post">
    <div class="formRow">
        <input type="text" name="name" value="<?php echo $category['name'] ?>" placeholder="name" />
    </div>

    <div class="formRow">
        <input type="hidden" name="action" value="<?php echo $action ?>" />
    </div>

    <div class="formRow">
        <?php if($action == 'edit'): ?>
            <input type="hidden" name="id" value="<?php echo $category['id'] ?>" />
        <?php endif; ?>
        <input type="hidden" name="save" value="1" />
        <input class="button" type="submit" value="save" />
    </div>
</form>
<!-- CategoryForm End -->