<?php

?>
<!DOCTYPE>

<head>
    <meta charset="utf-8"/>
    <title>To-Do</title>
    <link href="../styles.css" rel="stylesheet">
    <script src="../script.js" defer></script>
</head>
<div><a href="/tasks">
        <button>BACK</button></div></a>
<div>
    <h1>To-Do</h1>
    <p>do it</p>
</div>
</header>
<body>

<div class="taskTray">
    <?php
    echo \App\ViewHelpers\ToDoViewHelper::displayCompletedTasks($tasks)
    ?>
</div>

</body>