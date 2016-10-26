<!doctype html>
<html lang="en">
<head>
    <title>form</title>
    <meta charset="Utf-8">
</head>
<body>
<div>
    <form action="contr.php" method="post">
        <p>Логин</p><input type="text" name = "login" size="15" value=""/><br>
        <p>Пароль</p><input type="password" name = "password" size="15" value=""/><br>
        <br>
        <input type="submit" name="GO" value="Войти">
    </form>
    <p>РЕГИСТРАЦИЯ</p>
    <form action="reg.php" method="post">
        <p>Логин</p><input type="text" name = "login" size="15" value=""/><br>
        <p>Пароль</p><input type="password" name = "password" size="15" value=""/><br>
        <br>
        <input type="submit" name="GO" value="Войти">
    </form>
</body>
</html>