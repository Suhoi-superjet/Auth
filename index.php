<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Get started with Bootstrap, the world&rsquo;s most popular framework for building responsive, mobile-first sites, with jsDelivr and a template starter page.">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.101.0">

<meta name="docsearch:language" content="en">
<link rel="stylesheet" href="./vendors/bootstrap-4.6.2-dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Главная страница</title>
</head>
<body>
<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>
<?php if ($login === null): ?>
<a href="/login.php">Авторизуйтесь</a>
<?php else: ?>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="login">Добро пожаловать, <?= $login ?></label>
    <br>
    <input type="submit" name="reset" value="Выйти">
</form>
<?php if (isset($_POST['reset'])) {
        // Сброс COOKIE
        setcookie('login', '', time() - 3600, '/');
        setcookie('password', '', time() - 3600, '/');
        // Перезапуск страницы
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
endif; ?>
</body>
<script src="./vendors/bootstrap-4.6.2-dist/js/bootstrap.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="./vendors/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>