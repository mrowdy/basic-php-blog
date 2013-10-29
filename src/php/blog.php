<?php

require_once 'config.php';

set_include_path(
    get_include_path() .
    PATH_SEPARATOR . BASE_DIR .                         //PHP Directory
    PATH_SEPARATOR . BASE_DIR . '/functions/'           //Functions Directory

);

require_once 'getDatabase.php';
require_once 'getArticleById.php';

$db = getDatabase(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$article = getArticleById($db, 1);


