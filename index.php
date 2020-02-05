<?php
$content = "Главная";
$title = "Главная";
require "tpl/main.tpl";
?>
</header>
<body>
<form action="auch.php" method="post">
    <p>Логин</p>
    <input type="text" name="login" value="<?=$_COOKIE['login']?>">
    <P>Пароль</P>
    <input type="password" name="pass" value="<?=$_COOKIE['pass']?>"><br><br>
    <input type="submit" value="Войти">
    <a href="">Регистрация</a>
</form>
</body>
</html>
