<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $titulo; ?></title>
    </head>
    <body>
        <form method="GET" action="time.php">
            <label>Time 1: </label><input type="text" name="time1"><br>
            <label>Time 2: </label><input type="text" name="time2"><br>
            <button>Comparar</button>
        </form>
    </body>
</html>