<?php

function getCategories(){
    global $db;
    
    $query = "SELECT * FROM category WHERE status = '1' ORDER BY name";
    $result = mysqli_query($db, $query);
    $categories = array();

    if(mysqli_num_rows($result) > 0){
        while($category = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $categories[] = $category;
        }
        return $categories;
    }

    return false;
}