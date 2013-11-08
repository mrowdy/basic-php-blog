<?php

function login($username, $password){
    global $db;

    $username = mysqli_real_escape_string($db, $username);
    $password = md5($password);

    $query = sprintf("SELECT * FROM user WHERE username = '%s' AND password = '%s' AND status = '1'", $username, $password);

    $result = mysqli_query($db, $query);

    if($result && mysqli_num_rows($result) == 1){
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['user_login'] = true;
        $_SESSION['user_name'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_hash'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
        return true;
    }

    return false;
}

function logout(){
    session_destroy();
    session_start();
}

function auth(){
    $newUserHash = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

    $oldUserHash = isset($_SESSION['user_hash'])?$_SESSION['user_hash']:'';
    $login = isset($_SESSION['user_login'])?$_SESSION['user_login']:false;

    if($oldUserHash == $newUserHash && $login == true){
        return true;
    }

    return false;
}