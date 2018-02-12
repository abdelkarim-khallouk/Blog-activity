<?php
/**
 * Created by PhpStorm.
 * Date: 2/12/18
 * Time: 11:06 AM
 */


require('model.php');

function listPosts()
{
    $posts = getPosts();

    require('listPostsView.php');
}

function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('postView.php');
}