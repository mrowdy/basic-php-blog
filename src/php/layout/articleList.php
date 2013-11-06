<?php   if(isset($articleList)): ?>
    <ul class="articleList">
        <?php foreach($articleList as $article): ?>
            <li>
                <?php include 'article.php'; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>