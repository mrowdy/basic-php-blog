<h1>Categories <a class="right" href="/admin/edit-category.php?action=add">add</a></h1>
<?php if(isset($categoryList)): ?>
    <table class="adminTable">
        <tr>
            <th>Name</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach($categoryList as $category): ?>
            <tr>
                <td><?php echo $category['name']; ?></td>
                <td><a href="/admin/edit-category.php?action=edit&id=<?php echo $category['id']; ?>">edit</a></td>
                <td><a href="/admin/category?action=delete&id=<?php echo $category['id']; ?>.php">delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>