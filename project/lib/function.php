<?php
// библиотека функций

// вычисление суммы двух чисел
function summa ($a,$b)
{
  $sum = $a+$b;
  echo "Сумма чисел ".$a." и ".$b." равна ".$sum;
}


// Игра в кости
function kosti ()
{
    $kost1 = rand(1,6);
    $kost2 = rand(1,6);
    $summa = $kost1 + $kost2;
    echo "<img src=\"img/ris{$kost1}.gif\" width=\"150px\">";
    echo "<img src=\"img/ris{$kost2}.gif\" width=\"150px\">";
    echo "Вам выпало число ".$summa;
}

// Таблица Пифагора
function pifagor()
{
echo "<table>";

    for($i=1;$i<=9;$i++)
    {
        echo "<tr>";

        echo "</tr>";
    }


echo "</table>";
}
