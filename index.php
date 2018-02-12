<?php


//$p = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
//echo $p;
//echo __DIR__;

require(__DIR__ .'/controller/frontend.php');


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Error : No post id detected.';
        }
    }
}
else {
    listPosts();
}


