<?php

namespace App\Models;

use PDO;

class ToDoModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks()
    {
        $query = $this->db->prepare("SELECT `tasks`.`id`, `tasks`.`title`, `tasks`.`description`, `tasks`.`completed`, `priorities`.`priority` AS 'Priority' 
FROM `tasks` JOIN `priorities`
ON `tasks`.`priority_id` = `priorities`.`id`
WHERE `completed` = 0;");
        $query->execute();
        return $query->fetchAll();
    }

    public function addTask($task)
    {
        $priorityAsInt = intval($task['priority']);

        $query = $this->db->prepare('INSERT INTO `tasks` (`title`, `description`, `completed`, `priority_id`) VALUES (:title, :description , 0 , :priority_id);');
        $query->execute([
            "title" => $task['title'],
            "description" => $task['description'],
            "priority_id" => $priorityAsInt
        ]);
    }

    public function getCompletedTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `tasks` WHERE `completed` = 1;');
        $query->execute();
        return $query->fetchAll();
    }

    public function completeTask($taskId)
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `completed` = 1 WHERE `id` = :id;');
        $query->execute([
            "id" => $taskId
        ]);
        return $query->fetchAll();
    }

    public function deleteTask($taskId)
    {
        $query = $this->db->prepare('DELETE FROM `tasks` WHERE `id` = :id;');
        $query->execute([
            "id" => $taskId
        ]);
        return $query->fetchAll();
    }

}