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
function pifagor($tr,$td)
{
echo "<table class=\"table-striped table-bordered table-hover table-sm table-responsive\">";

    for($i=1;$i<=$tr;$i++)
    {

        if($i==1)
        {
            echo "<thead>";
            echo "<tr>";
            for($k=1; $k<=$td; $k++)
            {
                echo "<th scope=\"col\">{$k} </th>";
            }
            echo "</tr>";
            echo "</thead>";

        }
        else
        {
            echo "<tbody>";
            echo "<tr>";
            for($k=1; $k<=$td; $k++)
            {
                if($k==1)
                {
                    echo "<th scope=\"row\">".$k*$i."</th>";
                }
                else
                {
                    echo "<td>".$k*$i."</td>";
                }

            }
            echo "</tr>";

        }

    }

    echo "</tbody>";
echo "</table>";
}
