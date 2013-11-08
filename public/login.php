<?php

// include blog setup
require_once '../src/php/blog.php';


$username = isset($_POST['username'])?$_POST['username']:'';
$password = isset($_POST['password'])?$_POST['password']:'';
$error = '';

if(isset($_POST['action']) && $_POST['action'] == 'login'){
    if(!login($username, $password)){
        $error = 'Login failed!';
    }
}

if(auth()){
    header('location: /index.php');
    die();
}

?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'layout/_meta.php'; ?>
</head>
<body>
<div id="outer">
    <?php include 'layout/_navigation.php'; ?>
    <div class="wrap">
        <?php include 'layout/_loginForm.php'; ?>
    </div>
    <div class="wrap">
        <?php include 'layout/_footer.php'; ?>
    </div>
</div>
</body>
</html>