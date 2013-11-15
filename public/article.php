<?php

// include blog setup
require_once '../src/blog.php';

$articleId = isset($_GET['id'])?$_GET['id']:0;

// load article by id
$article  = getArticleById($articleId);
$articleList = array($article);

// throw 404 if article not found
if(!$article){
    header("HTTP/1.0 404 Not Found");
    die();
}

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
            <?php include 'layout/_articleList.php'; ?>
        </div>
        <div id="sidebar">
            <?php include 'layout/_sidebar.php'; ?>
        </div>

    </div>
</div>
</body>
</html>