<?php

require_once "./Helper/Input.php";
require_once "./BussinessLogic/RemoveToDoList.php";

function viewRemoveToDoList(){
    echo "Menghapus To Do" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x"){
        echo "Batal menghapus todo ";
    } else {
        $success = removeToDoList($pilihan);
    
        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}