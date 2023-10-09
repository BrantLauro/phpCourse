<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Machine</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <?php $c = ""?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Cash Machine!</h1>
            <label for="c">Amount to withdraw ($):</label>
            <input type="number" name="c" step="5">
            <input type="submit" value="Submit">
        </form>
        <?php
            $c = $_POST["c"] ?? "";
            if($c != "") { ?>
                <h1>Successful withdraw of $<?=number_format($c, 2)?>:</h1>
                <p>The Cash Machine will give you:
                    <?php
                        echo "<ul><li>". intdiv($c, 100) ." Notes of $100.00</li>";
                        $c -= intdiv($c, 100) * 100;
                        echo "<li>". intdiv($c, 50) ." Notes of $50.00</li>";
                        $c -= intdiv($c, 50) * 50;
                        echo "<li>". intdiv($c, 20) ." Notes of $20.00</li>";
                        $c -= intdiv($c, 20) * 20;
                        echo "<li>". intdiv($c, 10) ." Notes of $10.00</li>";
                        $c -= intdiv($c, 10) * 10;
                        echo "<li>". intdiv($c, 5). " Notes of $5.00</li>"; ?>
                </p>
            <?php } ?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>