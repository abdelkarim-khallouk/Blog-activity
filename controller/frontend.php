<?php
/**
 * Created by PhpStorm.
 * Date: 2/12/18
 * Time: 11:06 AM
 */

use \Master\Blog\Model\PostManager;
use \Master\Blog\Model\CommentManager;

require_once(__DIR__ ."/../model/PostManager.php");
require_once(__DIR__ ."/../model/CommentManager.php");

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require(__DIR__ .'/../view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);

    $commentManager = new CommentManager();
    $comments = $commentManager->getComments($_GET['id']);

    require(__DIR__ .'/../view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function modifyComment($id, $comment, $postId)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->updateComment($id, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}