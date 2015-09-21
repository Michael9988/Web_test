<?php
require_once "db.php";

$area = $_POST["area"];
$array = mysql_query("SELECT * FROM lesson_citys WHERE area_id = $area");
print_r($array);
echo "<option value=\"\">Выберите город</option>";
while ($m = mysql_fetch_array($array)) {
    echo "<option value=\"" . $m["id"] . "\">" . $m["city"] . "</option>";
}
?>

