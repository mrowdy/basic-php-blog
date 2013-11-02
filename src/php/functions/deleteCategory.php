<?php

function deleteCategory($db, $id){

    $query = sprintf("UPDATE category SET status = 0  WHERE id = '%d'", $id);

    $result = mysqli_query($db, $query);
    if($result){
        return $result;
    }

    return false;
}