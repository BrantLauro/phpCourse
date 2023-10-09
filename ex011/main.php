<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Calculator</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <?php $p = ""; $percent = 1?>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Price Adjustment!</h1>
            <label for="num">Price ($):</label>
            <input type="number" name="p" step="0.01">
            <label for="num">Adjustment percentage  <span id="valor">1%</span></label>
            <input type="range" id="slider" name="percent" min="1" max="100" value="<?=$percent?>">
            <input type="submit" value="Submit">
        </form>

        <script>
            var slider = document.getElementById("slider");
            var valor = document.getElementById("valor");

            slider.oninput = function() {
                valor.textContent = slider.value + "%";
            };
        </script>

        <?php
            $p = $_POST["p"] ?? "";
            $percent = $_POST["percent"] ?? 1;
            if($p != "") { ?>
                <h1>Result:</h1>
                <p>The product that costs <strong>$<?=number_format($p, 2)?></strong> will cost <strong>$<?=number_format($p * (1 + ($percent/100)), 2)?></strong> with the adjustment of <strong><?=$percent?>%</strong>.</p>
            <?php } ?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>