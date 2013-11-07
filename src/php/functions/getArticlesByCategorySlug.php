<?php

function getArticleByCategorySlug($db, $categorySlug){
    $query = sprintf("SELECT article.* FROM article
                      LEFT JOIN category ON category.id = article.category_id
                      WHERE category.slug='%s' AND article.status='1'", $id);

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