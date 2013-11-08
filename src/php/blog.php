<?php

require_once 'config.php';

date_default_timezone_set('Europe/Vienna');

set_include_path(
    get_include_path() .
    PATH_SEPARATOR . BASE_DIR .                         //PHP Directory
    PATH_SEPARATOR . BASE_DIR . '/functions/'           //Functions Directory

);

session_start();

require_once 'getDatabase.php';
require_once 'auth.php';

//Article Functions
require_once 'getArticles.php';
require_once 'getArticleById.php';
require_once 'getArticlesByCategorySlug.php';
require_once 'searchArticles.php';

//Category functions
require_once 'getCategories.php';
require_once 'getCategoryById.php';

//User Functions
require_once 'getUserById.php';

$db = getDatabase(DB_HOST, DB_USER, DB_PASS, DB_NAME);
