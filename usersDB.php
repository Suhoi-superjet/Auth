<?php
    $db_host = 'localhost';
    $db_name = 'usersdb';
    $db_user = 'root';
    $db_pass = '123456';
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if($db->connect_error){
        die("Ошибка: ".$db->connect_error);
    }
    $db->set_charset("utf8mb4");
    
    return $db;


    