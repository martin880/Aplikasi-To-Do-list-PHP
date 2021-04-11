<?php

// 5. Test Repo dan Service untuk menampilkan todolist

require_once "./Entity/ToDoList.php";
require_once "./Repository/ToDoListRepository.php";
require_once "./Service/ToDoListService.php";

use Service\ToDoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowToDoList(): void
{   
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todolist[] = "Belajar PHP";
    $todoListRepository->todolist[] = "Belajar PHP OOP";
    $todoListRepository->todolist[] = "Belajar PHP Database";

    $todoListService = new ToDoListServiceImpl($todoListRepository);

    $todoListService->showToDoList();
}

testShowToDoList();