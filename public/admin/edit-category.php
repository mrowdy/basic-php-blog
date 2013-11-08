<?php

require_once '../../src/php/admin.php';

$action = isset($_REQUEST['action'])?$_REQUEST['action']:'add';
$save   = isset($_POST['save'])?true:false;

$id = isset($_REQUEST['id'])?$_REQUEST['id']:0;
$name = isset($_POST['name'])?$_POST['name']:'';

if($action == 'edit' && $id){
    $category = getCategoryById($id);
    $category['name'] = $name;
    if($save){
        $category = editCategory($category);
        header('location: /admin/category.php');
        die();
    }

} else {
    $category = array(
        'name' => $name
    );
    if($save){
        $category = addCategory($category);
        header('location: /admin/category.php');
        die();
    }
}

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
        <div id="content">
            <?php include 'layout/admin/_categoryForm.php'; ?>
        </div>
    </div>
    <div class="wrap">
        <?php include 'layout/_footer.php'; ?>
    </div>
</div>
</body>
</html>