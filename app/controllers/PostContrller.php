<?php

class PostController{
    public function index()
    
    {
        require_once '../views/post/index.php';
    }

    public function create()

    {
        require_once '../views/post/create.php';
    }

    public function show()
    {
        require_once '../views/post/show.php';
    }

    public function edit()
    {
        require_once '../views/post/edit.php';
    }
}