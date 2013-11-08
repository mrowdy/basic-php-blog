<?php

require_once '../../src/php/admin.php';

$action = isset($_REQUEST['action'])?$_REQUEST['action']:'add';
$save   = isset($_POST['save'])?true:false;

$id =         isset($_REQUEST['id'])?$_REQUEST['id']:0;
$title =      isset($_POST['title'])?$_POST['title']:'';
$teaser =     isset($_POST['teaser'])?$_POST['teaser']:'';
$content =    isset($_POST['content'])?$_POST['content']:'';
$categoryId = isset($_POST['category_id'])?$_POST['category_id']:DEFAULT_CATEGORY;

if($action == 'edit' && $id){
    $article = getArticleById($id);
    if($save){
        $article['title'] =       $title;
        $article['teaser'] =      $teaser;
        $article['content'] =     $content;
        $article['category_id'] = $categoryId;

        $article = editArticle($article);

        header('location: /admin/article.php');
        die();
    }

} else {
    $article = array(
        'title'       => $title,
        'teaser'      => $teaser,
        'content'     => $content,
        'category_id' => $categoryId,
    );
    if($save){
        $article = addArticle($article);

        header('location: /admin/article.php');
        die();
    }
}

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
            <?php include 'layout/admin/_articleForm.php'; ?>
        </div>
    </div>
    <div class="wrap">
        <?php include 'layout/_footer.php'; ?>
    </div>
</div>
</body>
</html>