<!-- ArticleForm Start -->
<form class="form editForm" action="/admin/edit-article.php" method="post" enctype="multipart/form-data" >
    <div class="formRow">
        <input type="text" name="title" value="" placeholder="title" />
    </div>

    <div class="formRow">
        <textarea placeholder="teaser" name="teaser"></textarea>
    </div>

    <div class="formRow">
        <textarea class="big" placeholder="content" name="content"></textarea>
    </div>

    <div class="formRow">
        <select name="category_id">
            <option selected="selected" value="234">Travel</option>
            <option selected="selected" value="234">Food</option>
        </select>
    </div>

    <div class="formRow">
        <input type="file" name="article_image" />
    </div>
    <div class="formRow">
        <input type="hidden" name="action" value="add" />
        <input type="hidden" name="save" value="1" />
        <input class="button" type="submit" value="save" />
    </div>
</form>
<!-- ArticleForm End -->