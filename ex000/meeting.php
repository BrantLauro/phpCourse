<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Nice to meet you!</h1>
    </header>
    <section>
        <?php 
            $name = $_GET["name"] ?? "NULL";
            $lastName = $_GET["lastName"] ?? "NULL";
            echo "<p>Hello, $name $lastName. Welcome to my website!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Back</a></p>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>