<?php
if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }

if (empty($name) or empty($email))
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$name = stripslashes($name);
$name = htmlspecialchars($name);
$email = stripslashes($email);
$email = htmlspecialchars($email);
//удаляем лишние пробелы
$name = trim($name);
$email = trim($email);
// подключаемся к базе
include ("bd.php");
$result = mysql_query("SELECT id FROM users WHERE login='$name'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}

$result2 = mysql_query ("INSERT INTO users (name,email) VALUES('$name','$email')");

if ($result2=='TRUE')
{
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>