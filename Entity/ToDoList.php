<?php

// 1. Membuat entity / paling utama

namespace Entity {
    class Todolist {
        private string $todo;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        public function geTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }
    }
}