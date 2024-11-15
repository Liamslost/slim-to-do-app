<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class AddTasksController
{

    private $model;

    public function __construct(ToDoModel $model, PhpRenderer $view)
    {
        $this->model = $model;

    }

    public function __invoke($request, $response, $args)
    {
        $task = $request->getParsedBody();
        //do validation here
        $this->model->addTask($task);

        return $response->withHeader('Location', '/tasks')->withStatus(301);
    }
}