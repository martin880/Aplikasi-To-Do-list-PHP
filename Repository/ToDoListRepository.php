<?php

// 2. Membuat repository

namespace Repository {

use Entity\Todolist;

interface TodoListRepository {

        function save(Todolist $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;

    }

    class TodoListRepositoryImpl implements TodoListRepository {

        public array $todolist = array();

        function save(Todolist $todolist): void
        {
            
        }
        function remove(int $number): bool
        {

        }
        function findAll(): array
        {
            return $this->todolist;
        }
    }

}