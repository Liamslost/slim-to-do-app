<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class CompleteTasksController
{
    private $model;

    public function __construct(ToDoModel $model)
    {
        $this->model = $model;

    }

    public function __invoke($request, $response, $args)
    {
        $taskId = $args['id'];
        //do validation here
        $this->model->completeTask($taskId);

        return $response->withHeader('Location', '/tasks')->withStatus(301);
    }

}