<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Directories
define('BASE_DIR', __DIR__);
define('UPLOAD_PATH', __DIR__ . '../../public/images/');

// Database
define('DB_HOST', 'localhost');
define('DB_USER', 'markus');
define('DB_PASS', 'swordfish');
define('DB_NAME', 'simple_blog');

// Defaults
define('DEFAULT_CATEGORY', 1);