<?php

require_once "./View/ViewAddToDoList.php";
require_once "./BussinessLogic/ShowTodoList.php";
require_once "./BussinessLogic/AddToDoList.php";

addToDoList("Martin");
addToDoList("Halomoan");
addToDoList("Lumbangaol");

viewAddToDoList();

showTodoList();