<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- FontAwesome 6.2.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>TODO</title>
</head>

<body>

    <div id="app" class="py-5 bg-secondary">
        <h1 class="text-center">TODO List</h1>
        <div class="container border rounded border-primary w-50 bg-light py-2">
            <ul class="ls-none">

                <li v-for="task in tasks" :class="{done: task.completed}" class="list-item">
                    <p class="p-0 m-0" @click="toggleTask(index)"> {{task.name}} </p>
                    <div>
                        <button class="border border-0 bg-transparent" @click="deleteTask(index)">
                            <i class="fa-solid fa-check check"></i>
                        </button>
                        <button class="border border-0 bg-transparent" @click="deleteTask(index)">
                            <i class="fa-solid fa-trash-can bin"></i>
                        </button>
                    </div>
                </li>

            </ul>
        </div>
        <div class="container border rounded border-primary w-50 bg-light p-0 my-2">
            <div class="input-group">
                <input type="text" class="form-control" v-model="new_task" @keyup.enter="add_task" placeholder="Insert new task">
                <button class="input-group-text" id="basic-addon2" @click="add_task">Inserisci</button>
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