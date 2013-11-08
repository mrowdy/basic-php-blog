<?php

// include blog setup
require_once '../src/php/blog.php';

// load articles
$articleList = getArticles();

?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'layout/_meta.php'; ?>
</head>
<body>
    <div id="outer">
        <?php include 'layout/_navigation.php'; ?>
        <?php include 'layout/_header.php'; ?>
        <div class="wrap">

            <div id="content">
                <?php include 'layout/_teaserList.php'; ?>
            </div>
            <div id="sidebar">
                <?php include 'layout/_sidebar.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>
