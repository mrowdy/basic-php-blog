<h1>Articles <a class="right" href="/admin/edit-article.php?action=add">add</a></h1>
<?php if(isset($articleList)): ?>
    <table class="adminTable">
        <tr>
            <th>Title</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach($articleList as $article): ?>
            <tr>
                <td><?php echo $article['title']; ?></td>
                <td><a href="/admin/edit-article.php?action=edit&id=<?php echo $article['id']; ?>">edit</a></td>
                <td><a href="/admin/article?action=delete&id=<?php echo $article['id']; ?>.php">delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>