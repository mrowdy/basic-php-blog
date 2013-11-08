<?php

/**
 * @param $image entry from $_FILES array
 */
function uploadImage(array $image){
    $filename = UPLOAD_PATH . str_replace('~\W~', '-', $image['name']);
    //move_uploaded_file($image['tmp_name'], $filename);
    return $filename;
}