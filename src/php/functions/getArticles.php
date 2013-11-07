<?php

function getArticles($limit = 5){
    global $db;

    $query = sprintf("SELECT * FROM article WHERE status = '1' ORDER BY date_created DESC LIMIT 0,%d", $limit);
    $result = mysqli_query($db, $query);
    $articles = array();

    if(mysqli_num_rows($result) > 0){
        while($article = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $articles[] = $article;
        }
        return $articles;
    }

    return false;
}