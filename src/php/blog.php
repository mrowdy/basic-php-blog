<?php

require_once 'config.php';

set_include_path(
    get_include_path() .
    PATH_SEPARATOR . BASE_DIR .                         //PHP Directory
    PATH_SEPARATOR . BASE_DIR . '/functions/'           //Functions Directory

);

require_once 'getDatabase.php';
require_once 'insertArticle.php';
require_once 'updateArticle.php';
require_once 'getArticleById.php';

$db = getDatabase(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$article = getArticleById($db, 1);

$article = array(
    'id' => 3,
    'title' => 'Genera \' tedaasdfa article',
    'teaser' => 'short teasdfasdfaser',
    'content' => 'i am the coasdfntent',
    'status'  => 1,
);


var_dump(updateArticle($db, $article));