<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predecessor and successor</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <?php 
        $num1 = $_POST["num1"] ?? 0;
    ?>
    <br>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Type a Number:</h1>
            <label for="num1">Number:</label>
            <input type="number" name="num1" value="<?=$num1?>">
            <input type="submit" value="Submit">
        </form>
        <?php if($num1 != null) { ?>
            <h1>Result:</h1>
            <p>Number: <strong><?=$num1?></strong><br>
            <em>Predecessor:</em> <?=($num1 - 1)?><br>
            <em>Successor:</em> <?=($num1 + 1)?><br></p>
        <?php } ?>
          
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>