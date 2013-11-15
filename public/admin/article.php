<?php

require_once '../../src/admin.php';

$articleList = getArticles();

?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'layout/_meta.php'; ?>
</head>
<body>
<div id="outer">
    <?php include 'layout/admin/_navigation.php'; ?>
    <div class="wrap">
        <div id="content">
            <?php include 'layout/admin/_articleList.php'; ?>
        </div>
    </div>
</div>
</body>
</html>