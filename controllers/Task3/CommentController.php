<?php

namespace controllers\Task3;

use models\Comment;

class CommentController{
    public function index(){
        $commentModel = new Comment;
        $comments = $commentModel->findAll();

        include('app/views/task3/index.php');
    }

    public function store(){
        $commentModel = new Comment;
        $commentModel->add($_POST);

        header('Location: index.php?page=task3');
    }
}