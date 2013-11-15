<?php

require_once '../../src/admin.php';

?>

<!DOCTYPE html>
<html>
<head>
    <?php include 'layout/_meta.php'; ?>
</head>
<body>
<div id="outer">
    <?php include 'layout/admin/_navigation.php'; ?>
    <div class="wrap">
        <div class="mediumContent">
            <h1>Add Category</h1>
            <?php include 'layout/admin/_categoryForm.php'; ?>
        </div>
    </div>
</div>
</body>
</html>