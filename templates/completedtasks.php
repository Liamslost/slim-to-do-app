<?php

?>
<!DOCTYPE>

<head>
    <meta charset="utf-8"/>
    <title>To-Do</title>
    <link href="../styles.css" rel="stylesheet">
    <script src="../script.js" defer></script>
</head>
<header>
    <a href="/tasks">
        <button class="button">BACK</button>
    </a>
<div>
    <h1>To-Do</h1>
</div>
</header>
<body>

<div class="taskTray">
    <?php
    echo \App\ViewHelpers\ToDoViewHelper::displayCompletedTasks($tasks)
    ?>
</div>

</body>