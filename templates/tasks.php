<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>To-Do</title>
    <link href="styles.css" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body>
<header>
    <div><a href="/tasks/completed">
            <button>Completed Tasks</button></div>
    </a>
    <div>
        <h1>To-Do</h1>
        <p>do it</p>
    </div>
</header>
<section class="container">
    <div class="inputField">
        <form method="post">
            <div>
                <label for="title"></label><input type="text" name="title" id="title" placeholder="Task">
            </div>
            <div>
                <label for="description"></label><input type="text" name="description" id="description"
                                                        placeholder="Details">
            </div>
            <div>
<select name="priority" id="priority" required>
    <option value="0" disabled selected>Select Priority</option>
    <option value="1"  >Low</option>
    <option value="2" >Medium</option>
    <option value="3" >High</option>
    <option value="4" >Very High</option>
</select>
            </div>
            <button type="submit">Add task</button>
        </form>
    </div>
    <div class="taskTray">
        <?php
        echo \App\ViewHelpers\ToDoViewHelper::displayTasks($tasks);
        ?>
    </div>

</section>
</body>
</html>
