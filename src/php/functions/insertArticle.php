<?php

function insertArticle($db, array $article){

    $title =        mysqli_real_escape_string($db, $article['title']);
    $teaser =       mysqli_real_escape_string($db, $article['teaser']);
    $content =      mysqli_real_escape_string($db, $article['content']);
    $dateCreated  = $article['date_created'] = time();
    $dateModified = $article['date_modified'] = time();
    $status =       $article['status'] = 1;

    $query = sprintf("INSERT INTO article
                     (title, teaser, content, date_created, date_modified, status)
                     VALUES ('%s', '%s', '%s', '%d', '%d', '%d')",
                     $title, $teaser, $content, $dateCreated, $dateModified, $status);

    $result = mysqli_query($db, $query);
    if($result){
        $article['id'] = mysqli_insert_id($db);
        return $article;
    }

    return false;
}