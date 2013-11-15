<!-- CategoryForm Start -->
<form class="form editForm" action="/admin/edit-category.php" method="post">
    <div class="formRow">
        <input type="text" name="name" value="" placeholder="name" />
    </div>

    <div class="formRow">
        <input type="hidden" name="action" value="" />
    </div>

    <div class="formRow">
        <input type="hidden" name="save" value="1" />
        <input class="button" type="submit" value="save" />
    </div>
</form>
<!-- CategoryForm End -->