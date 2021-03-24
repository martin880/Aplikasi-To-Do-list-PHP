<?php

require_once "./Helper/Input.php";
require_once "./Model/ToDoList.php";
require_once "./BussinessLogic/AddToDoList.php";   

function viewAddToDoList(){
    echo "Menambah ToDO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x"){
        echo "Batal menambah to do";
    } else {
        addToDoList($todo);
    }
}