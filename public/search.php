<?php

// include blog setup
require_once '../src/blog.php';

//get category slug
$searchString = $_GET['search']?$_GET['search']:false;

//load articles by search string
$articleList = searchArticles($searchString);

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
