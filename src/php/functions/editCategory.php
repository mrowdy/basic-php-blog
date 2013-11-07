<?php

function editCategory(array $category){
    global $db;

    $id =           intval($category['id']);
    $name =         mysqli_real_escape_string($db, $category['name']);
    $dateModified = $category['date_modified'] = time();
    $status =       intval($category['status']);

    $query = sprintf("UPDATE category
                     SET name = '%s', date_modified = '%d', status = '%d'
                     WHERE id = '%d'",
                     $name, $dateModified, $status, $id);

    $result = mysqli_query($db, $query);
    if($result){
        return $category;
    }

    return false;
}