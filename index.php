<?php
session_start();
?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<h2>Главная страница</h2>
<form action="testreg.php" method="post">


    <p>
        <label>name:<br></label>
        <input name="name" type="text" size="15" maxlength="15">
    </p>



    <p>

        <label>email:<br></label>
        <input name="email" type="text" size="15" maxlength="15">
    </p>



    <p>
        <input type="submit" name="submit" value=Intra>


        <br>

        <a href="reg.php">Inregistrare</a>
    </p></form>
<br>
<?php

if (empty($_SESSION['name']) or empty($_SESSION['id']))
{

    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
}
else
{


    echo "Вы вошли на сайт, как ".$_SESSION['name']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
}
?>
</body>
</html>