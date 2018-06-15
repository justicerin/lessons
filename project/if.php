<?php
require_once "header.php";
require_once "body.php";
?>

<form method="post">
    Ваше имя <input type="text" name="name"><br><br>
    Ваша фамилия <input type="text" name="surname"><br>
    <input type="submit" value="OK">
</form>


<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
if($name=='Никита' && $surname=='Устиков')
{
    echo 'Добро пожаловать, Никита';
}
else
{
    echo "Мы вас не знаем";
}

require_once "footer.php";