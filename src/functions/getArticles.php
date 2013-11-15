<?php

/**
 * returns all articles, neweset first
 * @return array|bool
 */
function getArticles(){
    global $db;

    $query = "SELECT * FROM article WHERE status = '1' ORDER BY date_created DESC";
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