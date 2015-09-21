<?php require_once "db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html" />
        <meta charset="UTF-8" />
        <meta name="Description" content="..." />
        <meta name="Keywords" content="..." />
        <title>Выбор города</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="valid.js"></script>
    </head>
    <body>
        <form action="#" id="forma">
            <div id="container">
                <div id="divarea">
                    <label>Регион:</label>
                    <select id="areadropdown">
                        <option value="" >Выберите регион</option>
                            <?php
                            $array = mysql_query("SELECT * FROM lesson_areas");                            
                            while ($my = mysql_fetch_array($array)) {
                                echo "<option value=\"" . $my["id"] . "\">" . $my["area"] . "</option>";
                            }
                            ?>
                    </select>
                </div>
                <div id="divcity">
                    <label>Город:</label>
                    <select id="citydropdown" disabled="disabled"></select>
                </div>
            </div>
        </form>
    </body>
</html>
