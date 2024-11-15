<?php

namespace App\ViewHelpers;

class ToDoViewHelper
{

    public static function displayTasks($tasks): string

    {
        $output = "";
        $priorityColour = '';
        foreach ($tasks as $task) {

            if ($task['Priority'] == 'Low'){
                $priorityColour = 'lowPriority';
            } elseif ($task['Priority'] == 'Medium'){
                $priorityColour = 'mediumPriority';
            } elseif ($task['Priority'] == 'High'){
                $priorityColour = 'highPriority';
            } elseif ($task['Priority'] == 'Very High'){
                $priorityColour = 'veryHighPriority';}

            $output .= "<div class='taskTile''>";
            $output .= "<h1>{$task['title']}</h1>";
            $output .= "<p>{$task['description']}</p>";
            $output .= "<div class='flex between'>";
            $output .= "<div class='{$priorityColour} priorityTag'>{$task['Priority']} Priority</div>";
            $output .= "<form method='POST' action='/tasks/completed/{$task['id']}'>";
            $output .= "<button type='submit' class='completeButton button '>Complete</button>";
            $output .= "</form>";
            $output .= "</div>";
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
            $output .= "<div class='flex between'>";
            $output .= "<form method='POST' action='/tasks/deleted/{$task['id']}'>";
            $output .= "<button  class='button' type='submit' >Delete</button>";
            $output .= "</form>";
            $output .= "<form method='POST' action='/tasks/restore/{$task['id']}'>";
            $output .= "<button class='button' type='submit' >Restore</button>";
            $output .= "</form>";
            $output .= "</div>";
            $output .= "</div>";

        }
        return $output;
    }
}