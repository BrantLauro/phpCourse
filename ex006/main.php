<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Division</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <section>
        <?php $n1 = ""; $n2 = ""; ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Division Anatomy!</h1>
            <label for="reais">Type a number:</label>
            <input type="number" name="n1" value="0">
            <label for="reais">Type another number:</label>
            <input type="number" name="n2" value="1">
            <input type="submit" value="Submit">
        </form>
        <?php
            $n1 = $_POST["n1"] ?? "";
            $n2 =  $_POST["n2"] ?? "";
            if($n1 != "" && $n2 != "") {
                $div = $n1 / $n2;?>
                <h1>Division Structure</h1>
                <table class = "divisao">
                    <tr>
                        <td><?=$n1?></td>
                        <td><?=$n2?></td>
                    </tr>
                    <tr>
                        <td><?=$n1 % $n2?></td>
                        <td><?=(int) $div?></td>
                    </tr>
                </table>
            <?php }?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>