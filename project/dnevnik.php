<?php
require_once "header.php";
require_once "body.php";
$names = dbConnect("SELECT name FROM magazine");
while ($row = mysqli_fetch_assoc($names))
{
    $name[] = $row;
}
var_export($name);
?>
<h3>Электронный дневник</h3>
<form method="post">
    <table>
        <tr><td>Имя</td><td><input type="text" name="name" value=""></td></tr>
        <tr><td>Фамилия</td><td><input type="text" name="name" value=""></td></tr>
        <tr><td>Предмет</td><td><input type="text" name="name" value=""></td></tr>
        <tr><td>Оценка</td><td><input type="text" name="name" value=""></td></tr>
        <tr><td>Дата</td><td><input type="text" name="name" value=""></td></tr>
        <tr><td></td><td><input type="submit" value="Найти"></td></tr>
    </table>
</form>
<?php
require_once "footer.php";