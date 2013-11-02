<?php

function editArticle($db, array $article){

    $id =           intval($article['id']);
    $title =        mysqli_real_escape_string($db, $article['title']);
    $teaser =       mysqli_real_escape_string($db, $article['teaser']);
    $content =      mysqli_real_escape_string($db, $article['content']);
    $dateModified = $article['date_modified'] = time();
    $status =       intval($article['status']);

    $query = sprintf("UPDATE article
                     SET title = '%s', teaser = '%s', content = '%s', date_modified = '%d', status = '%d'
                     WHERE id = '%d'",
                     $title, $teaser, $content, $dateModified, $status, $id);

    $result = mysqli_query($db, $query);
    if($result){
        return $article;
    }

    return false;
}