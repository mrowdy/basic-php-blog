<?php


/**
 * Set srticles status to 0
 * @param $id
 * @return bool|mysqli_result
 */
function deleteArticle($id){
    global $db;

    $query = sprintf("UPDATE article SET status = 0  WHERE id = '%d'", $id);

    $result = mysqli_query($db, $query);
    if($result){
        return $result;
    }

    return false;
}