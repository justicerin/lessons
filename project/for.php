<?php
require_once "header.php";
require_once  "body.php";

for($i=1;$i<=100;$i++)
{
    if($i%2!=0)
    {
        echo "$i<br>";
    }

}
require_once "footer.php";