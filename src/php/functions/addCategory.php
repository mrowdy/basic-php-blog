<?php

function addCategory(array $category){
    global $db;

    $name =         mysqli_real_escape_string($db, $category['name']);
    $slug =         $category['slug'] = str_replace('~\W~', '-', $name);
    $dateCreated  = $category['date_created'] = time();
    $dateModified = $category['date_modified'] = time();
    $status =       $category['status'] = 1;

    $query = sprintf("INSERT INTO category
                     (name, slug, date_created, date_modified, status)
                     VALUES ('%s', '%s', '%s', '%d', '%d', '%d')",
                     $name, $slug, $dateCreated, $dateModified, $status);

    $result = mysqli_query($db, $query);
    if($result){
        $category['id'] = mysqli_insert_id($db);
        return $category;
    }

    return false;
}