<?php

// include blog setup
require_once '../src/php/blog.php';

// include used functions
require_once 'getArticles.php';

// load articles
$articles = getArticles($db);
var_dump($articles);


?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'layout/meta.php'; ?>
</head>
<body>
    <div id="outer">
        <div class="wrap">
            <?php include 'layout/header.php'; ?>
            <?php include 'layout/navigation.php'; ?>
        </div>
        <div class="wrap">
            <div id="content" class="grid">

            </div>
            <div class="grid">
                <?php include 'layout/sidebar.php'; ?>
            </div>
        </div>
        <div class="wrap">
            <?php include 'layout/footer.php'; ?>
        </div>
    </div>
</body>
</html>
