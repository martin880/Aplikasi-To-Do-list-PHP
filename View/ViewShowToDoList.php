<?php

require_once "./Model/ToDoList.php";
require_once "./BussinessLogic/ShowTodoList.php";
require_once "./View/ViewAddToDoList.php";
require_once "./View/ViewRemoveToDoList.php";
require_once "./Helper/Input.php";

function viewShowTodoList(){
    while (true){
        
        showTodoList();
        
        echo "MENU" . PHP_EOL;
        echo "1. Tambah ToDo" .PHP_EOL;
        echo "2. Hapus ToDo" .PHP_EOL;
        echo "x. Keluar" .PHP_EOL;
    
        $pilihan = input("Pilih");
    
        if ($pilihan == "1"){
            viewAddToDoList();
        }else if($pilihan == "2"){
            viewRemoveToDoList();
        }else if ($pilihan == "x"){
            break;
        }else{
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "See You Next Time" .PHP_EOL;

}