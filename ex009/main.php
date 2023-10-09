<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Average</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <?php $num1 = ""; $num2 = ""; $p1 = ""; $p2 = "";?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Type the numbers!</h1>
            <label for="num">First value:</label>
            <input type="number" name="num1">
            <label for="num">First weight:</label>
            <input type="number" name="p1">
            <label for="num">Second value:</label>
            <input type="number" name="num2">
            <label for="num">Second weight:</label>
            <input type="number" name="p2">
            <input type="submit" value="Submit">
        </form>
        
        <?php
            $num1 = $_POST["num1"] ?? "";
            $num2 = $_POST["num2"] ?? "";
            $p1 = $_POST["p1"] ?? 1;
            $p2 = $_POST["p2"] ?? 1;
            if($num1 != "" && $num2 != ""){
                if($p1 == "") $p1 = 1; if($p2 == "") $p2 = 1;?>
                <h1>Result:</h1>
                <p>
                    The values were: <strong><?="$num1 and $num2"?></strong><br>
                    The simple arithmetic average is: <strong><?=($num1+$num2)/2?></strong><br>
                    The weighted arithmetic average is: <strong><?=($num1*$p1 + $num2*$p2)/($p1 + $p2)?></strong>
                </p>
        <?php } ?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>