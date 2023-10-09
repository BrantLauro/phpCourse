<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How old are you?</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <?php $y = ""; $cy = date('Y');?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Let's se how old are you!</h1>
            <label for="num">Year of birth:</label>
            <input type="number" name="y">
            <label for="num">Until: (current: <?=$cy?>) </label>
            <input type="number" name="cy" value="<?=$cy?>">
            <input type="submit" value="Submit">
        </form>
        
        <?php
            $y = $_POST["y"] ?? "";
            $cy = $_POST["cy"] ?? $cy;
            if($y != "") {
                if($y > $cy) {?> <p>The year of birth must be <strong>less</strong> than the current year.</p>
                <?php } else {?>
                <h1>Result:</h1>
                <p>
                    How born in <strong><?=$y?></strong> will be <strong><?=$cy - $y?></strong> years old in <strong><?=$cy?></strong>.
                </p>
        <?php   } 
            }?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>