<?php //
//if (!empty($_POST)) {
//    require __DIR__ . '/auth.php';
//
//    $login = $_POST['login'] ?? '';
//    $password = $_POST['password'] ?? '';
//
//    if (checkAuth($login, $password)) {
//        setcookie('login', $login, 0, '/');
//        setcookie('password', $password, 0, '/');
//        header('Location: /index.php');
//    } else {
//        $error = 'Ошибка авторизации';
//    }
//}
?>
<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>

<?php if (isset($error)): ?>
    
<span style="color: red;">
    <?= $error ?>
</span>
<?php endif; ?>

<form action="/do_login.php" method="post">
    <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
    <br>
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Войти">
</form>
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
</body>
</html>