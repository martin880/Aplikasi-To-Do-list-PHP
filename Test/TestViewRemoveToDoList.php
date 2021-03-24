<?php

require_once "./Model/ToDoList.php";
require_once "./View/ViewRemoveToDoList.php";
require_once "./BussinessLogic/AddToDoList.php";
require_once "./BussinessLogic/ShowTodoList.php";

addToDoList("Martin");
addToDoList("Halomoan");
addToDoList("Lumbangaol");
addToDoList("Gitaris");
addToDoList("Gereja");

showTodoList();

viewRemoveToDoList();

showTodoList();
