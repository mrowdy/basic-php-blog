<h1>Articles</h1>
<a class="right button small" href="/admin/edit-article.php?action=add">add</a>
<?php if(isset($articleList)): ?>
    <table class="table">
        <tr>
            <th>Title</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach($articleList as $article): ?>
            <tr>
                <td><?php echo $article['title']; ?></td>
                <td><a href="/admin/edit-article.php?action=edit&id=<?php echo $article['id']; ?>">edit</a></td>
                <td><a href="/admin/article.php?action=delete&id=<?php echo $article['id']; ?>.php">delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>