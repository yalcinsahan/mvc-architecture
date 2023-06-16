<?php

require __DIR__ . '/../../config/database.php';

class Post
{

    public static function getPostById($id)
    {
        $stmt = Database::connect()->prepare("SELECT * FROM `posts` WHERE `id`=:id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function getAllPosts()
    {
        $stmt = Database::connect()->prepare("SELECT * FROM posts");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function createPost($title, $description)
    {
        $pdo = Database::connect();

        $pdo->beginTransaction();

        $stmt = $pdo->prepare("INSERT INTO `posts` (`title`,`description`) VALUES (:title,:description)");

        $stmt->bindParam(":title", $title, PDO::PARAM_STR);
        $stmt->bindParam(":description", $description, PDO::PARAM_STR);

        if ($stmt->execute() === FALSE) {

            $pdo->rollBack();

            return false;
        } else {

            $pdo->commit();

            return true;
        }
    }

    public static function updatePost($id,$title,$description)
    {

        // prepare the statement for execution
        $statement = Database::connect()->prepare('UPDATE `posts` SET `title`=:title,`description`=:description WHERE `id` = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':title', $title, PDO::PARAM_STR);
        $statement->bindParam(':description', $description, PDO::PARAM_STR);

        // execute the statement
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function deletePost($id)
    {

        // prepare the statement for execution
        $statement = Database::connect()->prepare('DELETE FROM posts WHERE id = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        // execute the statement
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
