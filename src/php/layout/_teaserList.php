<?php   if(isset($articleList)): ?>
    <ul class="articleList">
        <?php foreach($articleList as $article): ?>
            <li>
                <?php include '_teaser.php'; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>