<?php  if(isset($articleList) && is_array($articleList) && count($articleList) > 0): ?>
    <ul class="articleList">
        <?php foreach($articleList as $article): ?>
            <li>
                <?php include '_teaser.php'; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <h3>No articles found</h3>
<?php endif; ?>