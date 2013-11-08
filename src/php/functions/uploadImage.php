<?php

/**
 * @param array $image from $_FILES array
 * @param $destination
 * @return bool|string filename or false on error
 */
function uploadImage(array $image, $destination){
    $allowedExtensions = array('png', 'jpg', 'jpeg', 'gif');

    $filename = time() . '-' . strtolower(str_replace('~\W~', '-', $image['name']));
    $extension = substr($filename, -3);
    $fullPath = $destination . $filename;

    if(!is_writable($destination)){
        return false;
    }

    if(!in_array($extension, $allowedExtensions)){
        return false;
    }

    if(!getimagesize($image['tmp_name'])){
        return false;
    }

    move_uploaded_file($image['tmp_name'], $fullPath);
    return $filename;
}