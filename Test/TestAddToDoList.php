<?php

require_once "./Model/ToDoList.php";
require_once "./BussinessLogic/AddToDoList.php";

addToDoList("Martin");
addToDoList("Halomoan");
addToDoList("Lumbangaol");

var_dump($todoList);