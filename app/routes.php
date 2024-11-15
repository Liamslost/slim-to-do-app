<?php
declare(strict_types=1);


use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/tasks', \App\Controllers\TasksController::class);

    $app->get('/tasks/completed', \App\Controllers\GetCompletedTasksController::class);

    $app->post('/tasks', \App\Controllers\AddTasksController::class);

    $app->post('/tasks/completed/{id}', \App\Controllers\CompleteTasksController::class);

    $app->post('/tasks/deleted/{id}', \App\Controllers\DeleteTasksController::class);

    $app->post('/tasks/restore/{id}', \App\Controllers\RestoreTaskController::class);

//    $app->delete('/tasks/completed/{id}', );

};