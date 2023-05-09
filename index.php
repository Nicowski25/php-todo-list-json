<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>TODO</title>
</head>

<body>

    <div id="app" class="py-5 bg-secondary">
        <h1 class="text-center">TODO List</h1>
        <div class="container border rounded border-primary w-50 bg-light py-2">
            <ul>
                <li v-for="task in tasks">
                    <span :class="{'done': task.completed}"></span>
                    {{task.name}}
                </li>
            </ul>
            <div class="add-task">
                <input type="text" v-model="new_task" @keyup.enter="add_task" placeholder="Insert new task">
            </div>
        </div>
    </div>

    <!-- axios -->
    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
    <!-- vue -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src="./app.js"></script>
</body>

</html>