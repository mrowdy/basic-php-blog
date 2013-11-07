<?php

function getArticleById($id){
    global $db;

    $query = sprintf("SELECT * FROM article WHERE id='%d' AND status='1'", $id);
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) > 0){
        $article = mysqli_fetch_array($result, MYSQLI_ASSOC);
        return $article;
    }

    return false;
}