<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 2/14/18
 * Time: 10:23 AM
 */

class CommentManger extends Manager
{
    public function getComments($postId)
    {
        $dbManger = new Manager();
        $db = $dbManger->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $dbManger = new Manager();
        $db = $dbManger->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, CURRENT_TIMESTAMP())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
}