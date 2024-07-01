<?php
//function checkAuth(string $login, string $password): bool 
//{
//    $users = require __DIR__ . '/usersDB.php';
//
//    foreach ($users as $user) {
//        if ($user['login'] === $login 
//            && $user['password'] === $password
//        ) {
//            return true;
//        }
//    }
//
//    return false;
//}



function checkAuth(string $login, string $password){
    $db = require __DIR__ . '/usersDB.php';
    if($result = $db->query("SELECT login, password FROM users WHERE login = '" . $login."'")){
        foreach ($result as $row){
            if ($row['password'] == $password) return true;
        }
    }
    return false; 
    }

function getUserLogin(): ?string
{
    $loginFromCookie = $_COOKIE['login'] ?? '';
    $passwordFromCookie = $_COOKIE['password'] ?? '';

    if (checkAuth($loginFromCookie, $passwordFromCookie)) {
        return $loginFromCookie;
    }

    return null;
}