<?php

function getDatabase($dbHost, $dbUser, $dbPass, $dbDemo){
    $db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbDemo);
    if(!$db){
        die('no database');
    }
    return $db;
}