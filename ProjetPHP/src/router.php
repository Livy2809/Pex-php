<?php

class Router
{
    public function handleRequest($url)
    {
        if ($url === '/') {
            $controller = new TaskController();
            $controller->index();
        } elseif ($url === '/task/show') {
            $controller = new TaskController();
            $controller->show();
        } else {
            $this->notFound();
        }
    }

    public function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        echo '404 Not Found';
        exit();
    }
}
