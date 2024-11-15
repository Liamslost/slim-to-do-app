<?php

namespace App\ViewHelpers;

class ToDoViewHelper
{

    public static function displayTasks($tasks): string
    {
        $output = "";
        foreach ($tasks as $task) {

            $output .= "<div class='taskTile''>";
            $output .= "<h1>{$task['title']}</h1>";
            $output .= "<p>{$task['description']}</p>";
            $output .= "<form method='POST' action='/tasks/completed/{$task['id']}'>";
            $output .= "<button type='submit' class='completeButton'>Complete</button>";
            $output .= "</form>";
            $output .= "</div>";

        }
        return $output;

    }

    public static function displayCompletedTasks($tasks): string
    {
        $output = "";
        foreach ($tasks as $task) {

            $output .= "<div class='taskTile''>";
            $output .= "<h1>{$task['title']}</h1>";
            $output .= "<p>{$task['description']}</p>";
            $output .= "<form method='POST' action='/tasks/deleted/{$task['id']}'>";
            $output .= "<button type='submit' >Delete</button>";
            $output .= "</form>";
            $output .= "</div>";

        }
        return $output;
    }
}