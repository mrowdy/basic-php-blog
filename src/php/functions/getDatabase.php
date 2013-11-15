<?php

/**
 * Connect to mysql database and return connection
 * @param $dbHost
 * @param $dbUser
 * @param $dbPass
 * @param $dbDemo
 * @return mysqli
 */
function getDatabase($dbHost, $dbUser, $dbPass, $dbDemo){
    $db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbDemo);
    if(!$db){
        die('no database');
    }
    return $db;
}