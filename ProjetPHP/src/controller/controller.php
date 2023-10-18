<?php

class TaskController
{
    public function index()
    {
        $model = new TaskModel();
        $tasks = $model->getAllTasks();
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $twig = new \Twig\Environment($loader);
        echo $twig->render('task/index.twig', ['tasks' => $tasks]);
    }

    public function show()
    {
        
    }
}
