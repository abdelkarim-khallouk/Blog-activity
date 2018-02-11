<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 2/11/18
 * Time: 8:30 PM
 */

require('model.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require('postView.php');
}
else {
    echo 'Error : no post ID sent!';
}

