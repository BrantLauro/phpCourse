<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Analysis</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <section>
        <?php $sal = "";?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Salary Analyser!</h1>
            <label for="sal">Tell your salary (R$):</label>
            <input type="number" name="sal" value="0" ste="0.01">
            <input type="submit" value="Submit">
        </form>
        <p>Considering the minimum wage to be <strong>R$1380.00</strong></p>
        <?php
            $sal = $_POST["sal"] ?? "";
            $min = 1380;
            if($sal != "") {
                $div = $sal / $min;?>
                <p>How earns <strong>R$<?=number_format($sal, 2)?></strong> ears <strong><?=(int)$div?> minimum wages + R$<?=($sal % $min)?></strong></p>
            <?php }?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>