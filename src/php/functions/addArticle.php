<?php

function addArticle(array $article){
    global $db;

    $title =        mysqli_real_escape_string($db, $article['title']);
    $teaser =       mysqli_real_escape_string($db, $article['teaser']);
    $content =      mysqli_real_escape_string($db, $article['content']);
    $categoryId =   intval($article['category_id']);

    $image =        isset($article['image'])?mysqli_real_escape_string($db, $article['image']):'';
    $slug =         $article['slug'] = str_replace('~\W~', '-', $title);
    $user_id =      $article['user_id'] = $_SESSION['user_id'];
    $dateCreated  = $article['date_created'] = time();
    $dateModified = $article['date_modified'] = time();
    $status =       $article['status'] = 1;

    $query = sprintf("INSERT INTO article
                     (title, slug, teaser, content, category_id, user_id, image, date_created, date_modified, status)
                     VALUES ('%s', '%s', '%s', '%s', '%d', '%d', '%s', '%d', '%d', '%d')",
                     $title, $slug, $teaser, $content, $categoryId, $user_id, $image, $dateCreated, $dateModified, $status);

    $result = mysqli_query($db, $query);
    if($result){
        $article['id'] = mysqli_insert_id($db);
        return $article;
    }

    return false;
}