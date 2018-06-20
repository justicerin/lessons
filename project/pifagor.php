<?php
require_once "header.php";
require_once "body.php";
echo "Таблица Пифагора";
?>

<form id="pifagor_form" method="post">
  <div class="form-group">
    <input type="text" name="tr" class="form-control" id="tr" placeholder="Количество строк">
  </div>
    <div class="form-group">
        <input type="text" name="td" class="form-control" id="tr" placeholder="Количество столбцов">
    </div>
  <button type="submit" class="btn btn-primary">Нарисовать таблицу Пифагора</button>
</form>

<?php
echo "<div id=\"pifagor\">";

pifagor($_POST['tr'],$_POST['td']);
require_once "footer.php";
echo "</div>";