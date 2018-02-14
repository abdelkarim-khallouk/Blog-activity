<?php
/**
 * Created by PhpStorm.
 * Date: 2/12/18
 * Time: 11:06 AM
 */


require(__DIR__ .'/../model/frontend.php');

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

    $commentManager = new CommentManger();
    $comments = $commentManager->getComments($_GET['id']);

    require(__DIR__ .'/../view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManger();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}