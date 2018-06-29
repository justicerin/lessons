<?php
require_once "header.php";
require_once "body.php";
$names = dbConnect("SELECT * FROM magazine");
while ($row = mysqli_fetch_assoc($names))
{
    $name[] = $row;
}


?>
<h3>Электронный дневник</h3>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Предмет</th>
            <th scope="col">Оценка</th>
            <th scope="col">Дата</th>
        </tr>

    </thead>
    <tbody>
             <?php
            foreach ($name as $value)
            {
                echo "<tr>";
                echo "<td>{$value['name']}</td>";
                echo "<td>{$value['surname']}</td>";
                echo "<td>{$value['subject']}</td>";
                echo "<td>{$value['mark']}</td>";
                echo "<td>{$value['date']}</td>";
                echo "</tr>";
            }


           ?>
    </tbody>

    </table>

<?php
require_once "footer.php";