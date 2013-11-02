<?php

function deleteArticle($db, $id){

    $query = sprintf("UPDATE article SET status = 0  WHERE id = '%d'", $id);

    $result = mysqli_query($db, $query);
    if($result){
        return $result;
    }

    return false;
}