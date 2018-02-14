<?php


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
    elseif ($_GET['action'] == 'addComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            addComment();
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


