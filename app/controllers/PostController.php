<?php

require __DIR__ . '/../models/Post.php';

class PostController
{

    public static function index()
    {

        $posts = Post::getAllPosts();

        include_once(__DIR__ . '/../views/post/index.php');
    }

    public static function show($id)
    {

        $post = Post::getPostById($id);

        if($post){
            include_once(__DIR__ . '/../views/post/show.php');
        }

        else{
            echo "Post not found";
        }

    }

    public static function create()
    {

        include_once(__DIR__ . '/../views/post/create.php');
    }

    public static function store()
    {
        $title = htmlspecialchars($_POST['title']);
        $description = htmlspecialchars($_POST['description']);

        $isDone = Post::createPost($title,$description);

        if($isDone){
            $_SESSION['store_status'] = "Post added successfully";
        }
        else{
            $_SESSION['store_status'] = "Something went wrong";
        }

        header("Location: ../../posts/create");
        die();
    }

    public static function edit($id)
    {
        $id = htmlspecialchars($id);

        $post = Post::getPostById($id);

        if($post){
            include_once(__DIR__ . '/../views/post/edit.php');
        }
        else{
            echo "Post not found";
        }

    }

    public static function update()
    {

        $isDone =  Post::updatePost($_SESSION['update_id'], $_POST['title'], $_POST['description']);

        header("Location: ../../");
        die();
    }

    public static function destroy($id)
    {

        $isDone = Post::deletePost($id);

        header("Location: ../../");
        die();
    }
}
