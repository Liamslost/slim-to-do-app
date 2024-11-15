<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use Slim\Views\PhpRenderer;

class GetCompletedTasksController
{
    private $model;

    private $view;

    public function __construct(PhpRenderer $view, ToDoModel $model)
    {
        $this->view = $view;
        $this->model = $model;
    }

    public function __invoke($request, $response, $args)
    {
        $tasks = $this->model->getCompletedTasks();
        return $this->view->render($response, "completedtasks.php", ['tasks' => $tasks]);
    }
}