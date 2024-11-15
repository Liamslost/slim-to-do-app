<?php

namespace App\Controllers;

use App\Models\ToDoModel;

class DeleteTasksController
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
        $this->model->deleteTask($taskId);

        return $response->withHeader('Location', '/tasks/completed')->withStatus(301);
    }

}