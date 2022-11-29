<?php 

// prendo i dati e li stampo
$string= file_get_contents("todo.json");
echo $string;
$tasks = json_decode($string, true);
// invio dati
if (isset($_POST["newTask"])) {
    // Siamo nel caso di salvataggio del nuovo dato
    $new_task = $_POST["newTask"];
    
    echo $new_task;
    $newtask = [
        "text" => $new_task,
        "done" => false
    ];
    $tasks[]= $newtask;
};
header("content-type: application/json");
