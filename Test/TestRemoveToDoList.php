<?php

require_once "./Model/ToDoList.php";
require_once "./BussinessLogic/RemoveToDoList.php";
require_once "./BussinessLogic/AddToDoList.php";
require_once "./BussinessLogic/ShowToDoList.php";

addToDoList("Martin");
addToDoList("Halomoan");
addToDoList("Lumbangaol");
addToDoList("Wakanda");
addToDoList("Forevaaa");

showTodoList();

removeToDoList(4);

showTodoList();

$success = removeToDoList(5);
var_dump($success);

