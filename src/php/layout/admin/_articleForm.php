<form action="/admin/edit-article.php" method="post">
    <input type="text" name="title" value="<?php echo $article['title'] ?>" placeholder="title" />
    <textarea placeholder="teaser" name="teaser"><?php echo $article['teaser'] ?></textarea>
    <textarea placeholder="content" name="content"><?php echo $article['content'] ?></textarea>

    <select name="category_id">
        <?php $categoryList = getCategories(); ?>
        <?php foreach($categoryList as $category): ?>
            <option <?php if($article['category_id'] == $category['id']): ?> selected="selected" <?php endif; ?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
    </select>


    <input type="hidden" name="action" value="<?php echo $action ?>" />
    <?php if($action == 'edit'): ?>
        <input type="hidden" name="id" value="<?php echo $article['id'] ?>" />
    <?php endif; ?>
    <input type="hidden" name="save" value="1" />
    <input type="submit" value="save" />
</form>