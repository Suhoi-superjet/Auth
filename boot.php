<?php

// Инициализируем сессию
session_start();

// Простой способ сделать глобально доступным подключение в БД
function pdo(): PDO
{
    static $pdo;

    if (!$pdo) {
        $config = [
    'db_name' => 'usersdb',
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '123456',
    ];
        // Подключение к БД
        $dsn = 'mysql:dbname='.$config['db_name'].';host='.$config['db_host'];
        $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo;
}

function flash(?string $message = null)
{
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
          <div class="alert alert-danger mb-3">
              <?=$_SESSION['flash']?>
          </div>
        <?php }
        unset($_SESSION['flash']);
    }
}

function check_auth(): bool
{
    return !!($_SESSION['user_login'] ?? false);
}

//<html lang="en">
//  <head>
//    <meta charset="utf-8">
//<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
//<meta name="description" content="Get started with Bootstrap, the world&rsquo;s most popular framework for building responsive, mobile-first sites, with jsDelivr and a template starter page.">
//<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
//<meta name="generator" content="Hugo 0.101.0">
//
//<meta name="docsearch:language" content="en">
//<link rel="stylesheet" href="./vendors/bootstrap-4.6.2-dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
//    <title>Форма авторизации</title>
//</head>
//<script src="./vendors/bootstrap-4.6.2-dist/js/bootstrap.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
//<script src="./vendors/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
