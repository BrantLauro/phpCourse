<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Calculator</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <?php $s = ""?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Time Calculator!</h1>
            <label for="num">Type a number of seconds:</label>
            <input type="number" name="s">
            <input type="submit" value="Submit">
        </form>
        <?php
            $s = $_POST["s"] ?? "";
            if($s != "") { ?>
                <h1>Result:</h1>
                <p>
                    <?php
                        echo "<ul><li>Weeks: ". intdiv($s, 604800) ."</li>";
                        $s -= intdiv($s, 604800) * 604800;
                        echo "<li>Days: ". intdiv($s, 86400) ."</li>";
                        $s -= intdiv($s, 86400) * 86400;
                        echo "<li>Hours: ". intdiv($s, 3600) ."</li>";
                        $s -= intdiv($s, 3600) * 3600;
                        echo "<li>Minutes: ". intdiv($s, 60) ."</li>";
                        $s -= intdiv($s, 60) * 60;
                        echo"<li>Seconds: $s</li></ul>"?>
                </p>
            <?php } ?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>