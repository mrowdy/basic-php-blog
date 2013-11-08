<?php

require_once '../../src/php/admin.php';

$action = isset($_GET['action'])?$_GET['action']:false;
$id = isset($_GET['id'])?$_GET['id']:false;

if($action == 'delete' && $id){
    deleteArticle($id);
}

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
    <div class="wrap">
        <?php include 'layout/_footer.php'; ?>
    </div>
</div>
</body>
</html>