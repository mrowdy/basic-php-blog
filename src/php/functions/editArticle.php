<?php

/**
 * Edit article in database. needs $article array with id
 * @param array $article
 * @return array|bool
 */
function editArticle(array $article){
    global $db;

    $id =           intval($article['id']);
    $title =        mysqli_real_escape_string($db, $article['title']);
    $teaser =       mysqli_real_escape_string($db, $article['teaser']);
    $categoryId =   intval($article['category_id']);
    $image =        '';

    $content =      mysqli_real_escape_string($db, $article['content']);
    $dateModified = $article['date_modified'] = time();
    $status =       intval($article['status']);

    $query = sprintf("UPDATE article
                     SET title = '%s', teaser = '%s', content = '%s',
                     date_modified = '%d', status = '%d', category_id = '%d', image = '%s'
                     WHERE id = '%d'",
                     $title, $teaser, $content, $dateModified, $status, $categoryId, $image, $id);

    $result = mysqli_query($db, $query);
    if($result){
        return $article;
    }

    return false;
}