<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcions</title>
    <link rel="stylesheet" href=".\style.css">
    <?php 
        #include ou require, require interrompe a execução
        include "functions.php"; 
    ?>
</head>
<body>
    <br>
    <section>
        <?php $n1 = ""; $n2 = ""; ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1 style="text-align:center;">Functions Tester!</h1>
            <label for="reais">Type a number:</label>
            <input type="number" name="n1">
            <label for="reais">Type another number:</label>
            <input type="number" name="n2">
            <input type="submit" value="Submit">
        </form>
        <?php
            $n1 = $_POST["n1"] ?? "";
            $n2 =  $_POST["n2"] ?? "";
            if($n1 != "" && $n2 != "") { ?>
                <p>First Function: <?="$n1 + $n2 = ". sum($n1, $n2)?><br></p>
                <p>Second Function: <?="$n1 + $n2 + ($n1 + 1) + ($n2 + 2) = ". sumMult($n1, $n2, $n1 + 1, $n2 + 2)?><br></p>
                <p>Third Function: <?="$n1 + 10 = ". add($n1)?><br></p>
                <p>$n1 final value: <?=$n1?></p>
        <?php }?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>