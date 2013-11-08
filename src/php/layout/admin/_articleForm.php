<form class="form editForm" action="/admin/edit-article.php" method="post" enctype="multipart/form-data" >
    <div class="formRow">
        <input type="text" name="title" value="<?php echo $article['title'] ?>" placeholder="title" />
    </div>

    <div class="formRow">
        <textarea placeholder="teaser" name="teaser"><?php echo $article['teaser'] ?></textarea>
    </div>

    <div class="formRow">
        <textarea class="big" placeholder="content" name="content"><?php echo $article['content'] ?></textarea>
    </div>

    <div class="formRow">
        <select name="category_id">
            <?php $categoryList = getCategories(); ?>
            <?php foreach($categoryList as $category): ?>
                <option <?php if($article['category_id'] == $category['id']): ?> selected="selected" <?php endif; ?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="formRow">
        <input type="file" name="article_image" />
    </div>
    <div class="formRow">
        <input type="hidden" name="action" value="<?php echo $action ?>" />
        <?php if($action == 'edit'): ?>
            <input type="hidden" name="id" value="<?php echo $article['id'] ?>" />
        <?php endif; ?>
        <input type="hidden" name="save" value="1" />
        <input class="button" type="submit" value="save" />
    </div>
</form>