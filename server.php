<?php 

// prendo i dati e li stampo
$string= file_get_contents("todo.json");
echo $string;
// invio dati

header("content-type: application/json");
