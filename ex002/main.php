<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatory Numbers</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <h1>Randomize:</h1>
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <p style="text-align:justify">Press Generate to randomize the 6 numbers from <strong>Mega Sena</strong></p>
            <?php if($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
                <p>Result: <strong><?php randms()?></strong><br>
            <?php } ?>
            <input type="submit" value="Generate">
        </form>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
<?php 
    function randms() {
        for($i = 0; $i < 6; $i++){
            echo rand(1, 60);
            if($i != 5) echo "</strong>, <strong>";
        }
    }
?>
</html>