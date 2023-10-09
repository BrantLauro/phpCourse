<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double Analises</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <?php $num = "" ?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Double Analises!</h1>
            <label for="num">Type a double number:</label>
            <input type="number" name="num" step="0.001">
            <input type="submit" value="Submit">
        </form>
        
        <?php
            $num = $_POST["num"] ?? "";
            if($num != ""){
                $trunc = intval($num);
                $fp = $num - $trunc; ?>
                <p>
                    The typed number was: <strong><?=number_format($num, 3)?></strong><br>
                    The int part is: <strong> <?=number_format($trunc, 0)?></strong><br>
                    The double part is: <strong> <?=number_format($fp, 3)?></strong>
                </p>
        <?php } ?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>