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
require_once __DIR__.'/boot.php';
?>

<?php if (!check_auth()): ?>
<a href="/login.php">Авторизуйтесь</a>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php else: ?>
Добро пожаловать, <?= $_SESSION['user_login'] ?>
<br>
<a href="/login.php">Выйти</a>
<?php endif; ?>
</body>
<script src="./vendors/bootstrap-4.6.2-dist/js/bootstrap.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="./vendors/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>