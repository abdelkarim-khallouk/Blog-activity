<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 2/14/18
 * Time: 10:13 AM
 */

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=ocr_db;charset=utf8', 'root', '123456');
        return $db;
    }
}