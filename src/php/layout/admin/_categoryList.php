<h1>Categories</h1>
<a class="right button small" href="/admin/edit-category.php?action=add">add</a>
<?php if(isset($categoryList)): ?>
    <table class="table">
        <tr>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach($categoryList as $category): ?>
            <tr>
                <td><?php echo $category['name']; ?></td>
                <td><a href="/admin/edit-category.php?action=edit&id=<?php echo $category['id']; ?>">edit</a></td>
                <td><a href="/admin/category.php?action=delete&id=<?php echo $category['id']; ?>.php">delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>