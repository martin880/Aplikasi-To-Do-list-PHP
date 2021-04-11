<?php

// 3. Membuat service

namespace Service {

use Entity\Todolist;
    use Repository\TodoListRepository;

interface ToDoListService {

        function showToDoList();

        function addToDoList(string $todo): void;

        function removeToDoList(int $number): void;

    }

    class ToDoListServiceImpl implements ToDoListService {

        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }

        function showToDoList(): void
        {
            
            echo "TO DO LIST" . PHP_EOL;
            $todolist = $this->todoListRepository->findAll();
            foreach ( $todolist as $number => $value){
                echo "$number . $value" . PHP_EOL;
            }
            
        }
        function addToDoList(string $todo): void
        {
            
        }
        function removeToDoList(int $number): void
        {
            
        }
    }
}