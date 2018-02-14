<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 2/14/18
 * Time: 10:17 AM
 */

class PostManager extends Manager
{
    public function getPosts()
    {
        $dbManger = new Manager();
        $db = $dbManger->dbConnect();
        $req = $db->query(
            'SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr 
                   FROM posts ORDER BY creation_date 
                   DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $dbManger = new Manager();
        $db = $dbManger->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
}