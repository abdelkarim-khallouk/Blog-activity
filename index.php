<?php

require(__DIR__ .'/controller/frontend.php');

try {

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception("No post id detected.");
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception("Tous les champs ne sont pas remplis !");
                }
            }
            else {
                throw  new Exception("Aucun identifiant de billet envoyé");
            }
        }
        elseif ($_GET['action'] == 'modifyComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if(!empty($_POST['comment']) && !empty($_GET['post_id'])) {
                    modifyComment($_GET['id'], $_POST['comment'], $_GET['post_id']);
                }
                else {
                    throw new Exception("Un ou plusieur champs ne sont pas remplis !");
                }
            }
            else {
                throw  new Exception("Aucun identifiant de billet envoyé");
            }
        }
    }
    else {
        listPosts();
    }
}
catch (Exception $ex) {
    $errorMessage = $ex->getMessage();
    require(__DIR__ .'/view/frontend/errorView.php');
}

