<?php

/**
 * get all active articles by given search string. search in teaser, content, user, category
 * @param $string
 * @return array|bool
 */
function searchArticles($string){
    global $db;

    $string = mysqli_real_escape_string($db, $string);

    $query = sprintf("SELECT article.* FROM article
                    LEFT JOIN category ON article.category_id = category.id
                    LEFT JOIN user ON article.user_id = user.id
                    WHERE ( article.title LIKE '%%%s%%'
                    OR article.teaser LIKE '%%%s%%'
                    OR article.content LIKE '%%%s%%'
                    OR article.image LIKE '%%%s%%'
                    OR category.name LIKE '%%%s%%'
                    OR user.username LIKE '%%%s%%' )
                    AND active = '1'
                    ORDER BY article.date_created DESC
                    ", $string, $string, $string, $string, $string, $string);

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