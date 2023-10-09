<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Roots</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <?php $num = "" ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Type a number!</h1>
            <label for="num">Number:</label>
            <input type="number" name="num">
            <input type="submit" value="Submit">
        </form>
        
        <?php
            $num = $_POST["num"] ?? "";
            if($num != ""){?>
                <h1>Result:</h1>
                <p>
                    The typed number was: <strong><?=$num?></strong><br>
                    The square root is <strong><?=sqrt($num)?></strong><br>
                    The cubic root is: <strong><?=$num ** (1/3)?></strong>
                </p>
        <?php } ?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>