<?php

require_once "Model/ToDoList.php";
require_once "BussinessLogic/ShowTodoList.php";
require_once "BussinessLogic/AddToDoList.php";
require_once "BussinessLogic/RemoveToDoList.php";
require_once "View/ViewAddToDoList.php";
require_once "View/ViewRemoveToDoList.php";
require_once "View/ViewShowToDoList.php";
require_once "Helper/Input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodoList();