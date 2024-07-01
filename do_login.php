<?php

require_once __DIR__.'/boot.php';

// проверяем наличие пользователя с указанным юзернеймом
$stmt = pdo()->prepare("SELECT login, password FROM `users` WHERE `login` = :login");
$stmt->execute(['login' => $_POST['login']]);
if (!$stmt->rowCount()) {
    flash('Пользователь с такими данными не зарегистрирован');
    header('Location: login.php');
    die;
}
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// проверяем пароль
if ($_POST['password'] == $user['password']) {
    $_SESSION['user_login'] = $user['login'];
    header('Location: /');
    die;
}

flash('Пароль неверен');
header('Location: login.php');