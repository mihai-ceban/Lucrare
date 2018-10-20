<?php
session_start()
if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
if (isset($_POST['email'])) { $password=$_POST['email']; if ($email =='') { unset($email);} }

if (empty($name) or empty($email))
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$login = stripslashes($name);
$login = htmlspecialchars($name);
$password = stripslashes($email);
$password = htmlspecialchars($email);

$name = trim($name);
$email = trim($email;

include ("bd.php");

$result = mysql_query("SELECT * FROM users WHERE login='$name'",$db);
if (empty($myrow['email']))
{

    exit ("Извините, введённый вами name или email неверный.");
}
else {

    if ($myrow['email']==$email) {

        $_SESSION['name']=$myrow['name'];
        $_SESSION['id']=$myrow['id'];
        echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    }
    else {


        exit ("Извините, введённый вами namen или email неверный.");
    }
}
?>