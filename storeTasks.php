<?php 

if (isset($_POST['new_task'])) {

    $newTask = [
        "name" => $_POST['new_task'],
        "completed" => false
    ];

    //read json file
    $task_string = file_get_contents('tasks.json');
    
    //convert json_string in array w/json_decode
    $tasks_array = json_decode($task_string, true);
    
    //add new task to array
    array_unshift($tasks_array, $newTask);

    // array convert to json
    $new_tasks_json_string = json_encode($tasks_array);

    //replace file content w/file_put_content
    file_put_contents('tasks.json', $new_tasks_json_string);

    header('Content-Type: application/json');

    //echo json
    
    header('Access-Control-Allow-Origin: http://localhost:8888');
    header('Access-Control-Allow-Origin: X-Requested-With');

    
    echo $new_tasks_json_string;
}

?>